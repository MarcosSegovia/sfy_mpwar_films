<?php

namespace FilmApiBundle\Service;


use FilmApiBundle\Entity\Film;

final class AddFilmUseCase
{

    private $film;

    public function __construct()
    {

    }

    public function __invoke()
    {
        echo "Testing";
    }
}