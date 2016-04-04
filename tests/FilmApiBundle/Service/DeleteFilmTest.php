<?php


namespace Tests\FilmApiBundle\Service;


use FilmApiBundle\Service\DeleteFilmRequest;

class DeleteFilmTest extends BaseFilmServiceTest
{


    public function testDeleteFilm()
    {

        $list_films_service = $this->container->get('list_films_use_case');
        $result = $list_films_service->__invoke();

        $remove_film_service = $this->container->get('delete_film_use_case');
        $new_delete_film_request = new DeleteFilmRequest(1);
        $remove_film_service->__invoke($new_delete_film_request);


        $result2 = $list_films_service->__invoke();

        $expected = count($result) - 1;
        $actual = count($result2);
        $this->assertEquals($expected, $actual);

    }


}