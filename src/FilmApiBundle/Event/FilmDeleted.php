<?php

namespace FilmApiBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class FilmDeleted extends Event
{
    const NAME = 'film.deleted';
}