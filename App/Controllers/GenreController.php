<?php

namespace App\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Framework\Core\BaseController;
use Framework\Http\HttpException;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class GenreController extends BaseController
{
    public function index(Request $request): Response
    {
        return $this->html(['genres' => Genre::getAll(null, [], 'added_at DESC, id DESC')
                            ], 'manage');
    }

    public function add(Request $request): Response
    {
        return $this->html(['genre' => new Genre()]);
    }

    public function edit(Request $request): Response
    {
        return $this->html(['genre' => $this->findGenre($request)]);
    }

    public function save(Request $request): Response
    {
        $genre = (int)$request->value('id') > 0
            ? $this->findGenre($request)
            : new Genre();

        $genre->setFromRequest($request);

        if ($genre->getAddedAt() === '') {
            $genre->setAddedAt(date('Y-m-d'));
        }

        $genre->save();

        return $this->redirect($this->url('genre.index'));
    }


    public function delete(Request $request): Response
    {
        if (!$request->isPost()) {
            throw new HttpException(405);
        }

        $this->findGenre($request)->delete();

        return $this->redirect($this->url('genre.index'));
    }

    private function findGenre(Request $request): Genre
    {
        $genre = Genre::getOne((int)$request->value('id'));
        if ($genre === null) {
            throw new HttpException(404, 'Genre not found');
        }
        return $genre;
    }
}

