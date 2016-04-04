<?php


namespace Tests\FilmApiBundle\Service;


use FilmApiBundle\Entity\Film;
use FilmApiBundle\Service\EditFilmRequest;

class EditFilmTest extends BaseFilmServiceTest
{


    public function testEditFilm()
    {

        $show_films_service = $this->container->get('show_films_use_case');
        /** @var Film $the_film */
        $the_film = $show_films_service->__invoke(2);

        $id = $the_film->id();
        $name = 'Modificado';
        $year = $the_film->year();
        $date = null;
        $url = $the_film->url();

        $edit_film_service = $this->container->get('edit_film_use_case');
        $new_edit_film_request = new EditFilmRequest($id, $name, $year, $date, $url);
        $edit_film_service->__invoke($new_edit_film_request);

        /** @var Film $the_film_edited */
        $the_film_edited = $show_films_service->__invoke(2);

        $this->assertEquals($the_film->year(), $the_film_edited->year());
        $this->assertEquals($the_film->url(), $the_film_edited->url());
        $this->assertNotEquals($the_film->name(), $the_film_edited->name());
        //$this->assertEquals('Modificado', $the_film_edited->name());
    }


}