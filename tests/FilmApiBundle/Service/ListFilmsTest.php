<?php


namespace Tests\FilmApiBundle\Service;


class ListFilmsTest extends BaseFilmServiceTest
{

    public function testListFilm()
    {
        $list_films_service = $this->container->get('list_films_use_case');
        $result = $list_films_service->__invoke();
        $expected = 2;
        $actual = count($result);
        $this->assertEquals($expected, $actual);
    }

}