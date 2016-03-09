<?php

namespace FilmApiBundle\Event;


use Symfony\Component\EventDispatcher\Event;


class FilmAddedEvent extends Event
{

    const NAME = 'film.added';

    public function __construct()
    {

    }

}
