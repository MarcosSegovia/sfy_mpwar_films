<?php

namespace FilmApiBundle\Listener;


use Symfony\Component\EventDispatcher\Event;


final class AddFilmListener
{

    private $film;

    public function __construct()
    {

    }

    public function add(Event $event)
    {
        var_dump($event);
    }
}
