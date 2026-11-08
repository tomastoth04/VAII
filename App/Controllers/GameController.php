<?php

namespace App\Controllers;

use App\Models\Game;
use Framework\Core\BaseController;
use Framework\Http\HttpException;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class GameController extends BaseController
{
    public function index(Request $request): Response
    {
        return $this->html(['games' => Game::getAll()]);
    }


    public function add(Request $request): Response
    {
        return $this->html(['game' => new Game()]);
    }


    public function edit(Request $request): Response
    {
        return $this->html(['game' => $this->findGame($request)]);
    }


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

        $game->save();

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
        if (!$request->isPost()) {
            throw new HttpException(405);
        }

        $this->findGame($request)->delete();

        return $this->redirect($this->url('game.manage'));
    }
}
