<?php

namespace App\Controllers;

use App\Models\Game;
use Framework\Core\BaseController;
use Framework\Http\HttpException;
use Framework\Http\Request;
use Framework\Http\Responses\Response;
use App\Models\Genre;

class GameController extends BaseController
{
    public function index(Request $request): Response
    {
        return $this->html(['games' => Game::getAll()]);
    }


    public function add(Request $request): Response
    {
        return $this->html([
            'game' => new Game(),
            'genres' => Genre::getAll(),
            'selectedGenreIds' => []
        ]);
    }


    public function edit(Request $request): Response
    {
        $game = $this->findGame($request);

        return $this->html([
            'game' => $game,
            'genres' => Genre::getAll(),
            'selectedGenreIds' => $game->getGenreIds()
        ]);
    }

    /**
     * Save a game (either create a new one or update an existing one).
     * Dôležité je poradie operácií.
     * Najprv ukladáme hru, pretože až po jej uložení máme jej ID potrebné na vytvorenie záznamov v game_genres.
     *
     * @param Request $request The HTTP request object containing form data.
     * @return Response A redirect response to the game management page.
     */
    public function save(Request $request): Response
    {
        $game = (int)$request->value('id') > 0
            ? $this->findGame($request)
            : new Game();

        $game->setFromRequest($request);

        if ($game->getReleaseDate() === '') {
            $game->setReleaseDate(null);
        }

        if ($game->getAddedAt() === '') {
            $game->setAddedAt(date('Y-m-d'));
        }

        // Uloženie hry
        $game->save();

        // Získanie vybraných žánrov z formulára
        $postData = $request->post();
        $genreIds = $postData['genres'] ?? [];

        if (!is_array($genreIds)) {
            $genreIds = [];
        }

        // Aktualizácia prepojení hry so žánrami
        $game->syncGenres($genreIds);

        return $this->redirect($this->url('game.manage'));
    }


    private function findGame(Request $request): Game
    {
        $game = Game::getOne((int)$request->value('id'));
        if ($game === null) {
            throw new HttpException(404, 'Game not found');
        }
        return $game;
    }

    public function manage(Request $request): Response
    {
        return $this->html(['games' => Game::getAll(null, [], 'added_at DESC')]);
    }

    public function delete(Request $request): Response
    {
        // Ensure that the request is a POST request for deletion, because deletion should not be allowed via GET requests for security reasons.
        if (!$request->isPost()) {
            throw new HttpException(405);
        }

        $this->findGame($request)->delete();

        return $this->redirect($this->url('game.manage'));
    }
}
