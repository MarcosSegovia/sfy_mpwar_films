<?php

namespace FilmApiBundle\Service;


use FilmApiBundle\Entity\Film;

final class AddFilmUseCase {

    private $film;

    public function __construct($a_name, $an_year, $a_date, $an_url){
        $this->film = Film::register($a_name, $an_year, $a_date, $an_url);
    }

    public function __invoke(){

    }
}