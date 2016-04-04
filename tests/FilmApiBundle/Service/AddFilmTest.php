<?php

namespace Tests\FilmApiBundle\Service;


use FilmApiBundle\Service\AddFilmRequest;

class AddFilmTest extends BaseFilmServiceTest
{


    public function testAddFilm()
    {

        $list_films_service = $this->container->get('list_films_use_case');
        $result = $list_films_service->__invoke();

        $add_film_service = $this->container->get('add_film_use_case');
        $name = 'The Godfather';
        $year = 1972;
        $date = null;
        $url = 'https://www.filmaffinity.com/es/film809297.html';

        $add_film_request = new AddFilmRequest($name, $year, $date, $url);
        $add_film_service->__invoke($add_film_request);


        $result2 = $list_films_service->__invoke();

        $expected = count($result) + 1;
        $actual = count($result2);
        $this->assertEquals($expected, $actual);
    }


}