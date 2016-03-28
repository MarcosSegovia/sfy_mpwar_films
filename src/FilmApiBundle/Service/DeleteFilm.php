<?php

namespace FilmApiBundle\Service;

use Doctrine\ORM\EntityManager;
use FilmApiBundle\Event\FilmDeleted;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

final class DeleteFilm
{
    private $entity_manager;
    private $event_dispatcher;

    public function __construct(
        EntityManager $an_em,
        EventDispatcherInterface $an_event_dispatcher
    )
    {
        $this->entity_manager = $an_em;
        $this->event_dispatcher = $an_event_dispatcher;
    }

    public function __invoke(DeleteFilmRequest $request)
    {
        $the_film_to_delete = $this->entity_manager->find('FilmApiBundle\Entity\Film', $request->id());
        $this->entity_manager->remove($the_film_to_delete);
        $this->entity_manager->flush();

        $film_deleted_event = new FilmDeleted();
        $this->event_dispatcher->dispatch(FilmDeleted::NAME, $film_deleted_event);
    }

}
