<?php

namespace FilmApiBundle\Service;

use Doctrine\ORM\EntityManager;
use FilmApiBundle\Entity\Film;
use FilmApiBundle\Event\FilmAdded;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

final class AddFilm
{
    private $entity_manager;
    private $event_dispatcher;

    public function __construct(EntityManager $an_em,
        EventDispatcherInterface $an_event_dispatcher)
    {
        $this->entity_manager = $an_em;
        $this->event_dispatcher = $an_event_dispatcher;
    }

    public function __invoke(AddFilmRequest $request)
    {
        $film = Film::register($request->name(), $request->year(), $request->date(), $request->url());
        $this->entity_manager->persist($film);
        $this->entity_manager->flush();

        $event = new FilmAdded();
        $this->event_dispatcher->dispatch(FilmAdded::NAME, $event);
    }
}