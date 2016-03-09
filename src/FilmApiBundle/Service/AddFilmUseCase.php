<?php

namespace FilmApiBundle\Service;


use FilmApiBundle\Entity\Film;
use Symfony\Component\EventDispatcher\EventDispatcher;
use FilmApiBundle\Listener\AddFilmListener;
use FilmApiBundle\Event\FilmAddedEvent;


final class AddFilmUseCase
{

    private $film;

    public function __construct()
    {

    }

    public function __invoke()
    {
        $dispatcher = new EventDispatcher();
        $add_film_listener = new AddFilmListener();
        $dispatcher->addListener('film.added', array($add_film_listener, 'add'));

        $event = new FilmAddedEvent();
        $dispatcher->dispatch(FilmAddedEvent::NAME, $event);
    }
}