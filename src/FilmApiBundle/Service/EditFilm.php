<?php


namespace FilmApiBundle\Service;


use FilmApiBundle\Entity\FilmRepositoryInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

final class EditFilm
{
    private $entity_repository;
    private $event_dispatcher;

    public function __construct(FilmRepositoryInterface $an_er, EventDispatcherInterface $an_event_dispatcher)
    {
        $this->entity_repository = $an_er;
        $this->event_dispatcher = $an_event_dispatcher;
    }

    public function __invoke(EditFilmRequest $request)
    {
        $an_existing_film = $this->entity_repository->findById($request->id());
        $an_existing_film->setName($request->name());
        $an_existing_film->setYear($request->year());
        $an_existing_film->setDate($request->date());
        $an_existing_film->setUrl($request->url());

        $this->entity_repository->updateFilms();
    }

}
