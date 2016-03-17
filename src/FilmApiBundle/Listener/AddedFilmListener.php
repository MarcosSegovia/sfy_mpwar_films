<?php

namespace FilmApiBundle\Listener;


use FilmApiBundle\Event\FilmAddedEvent;


final class AddedFilmListener
{

    public function onFilmAdded(FilmAddedEvent $event)
    {
        var_dump($event);
    }

}
