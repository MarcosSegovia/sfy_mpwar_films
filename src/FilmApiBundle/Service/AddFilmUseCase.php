<?php

namespace FilmApiBundle\Service;


use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use FilmApiBundle\Event\FilmAddedEvent;


final class AddFilmUseCase
{

    private $dispatcher;

    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function __invoke()
    {
        $event = new FilmAddedEvent();
        $this->dispatcher->dispatch(FilmAddedEvent::NAME, $event);
    }

}