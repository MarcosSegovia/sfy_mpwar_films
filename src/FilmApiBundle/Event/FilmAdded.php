<?php

namespace FilmApiBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class FilmAdded extends Event
{
    const NAME = 'film.added';
}
