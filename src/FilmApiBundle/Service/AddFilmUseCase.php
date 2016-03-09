<?php

namespace FilmApiBundle\Service;

use FilmApiBundle\Entity\Film;
use FilmApiBundle\Repository\FilmRepository;

final class AddFilmUseCase
{
    private $films_repository;

    public function __construct(FilmRepository $a_films_repository)
    {
        $this->films_repository = $a_films_repository;
    }

    public function __invoke()
    {
        //$film = Film::register($a_name, $an_year, $a_date, $an_url);

        $this->films_repository->listFilms();

    }
}