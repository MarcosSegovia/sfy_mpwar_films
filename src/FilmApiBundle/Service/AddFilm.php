<?php

namespace FilmApiBundle\Service;

use Doctrine\ORM\EntityManager;
use FilmApiBundle\Entity\Film;

final class AddFilm
{
    private $entity_manager;

    public function __construct(EntityManager $an_em)
    {
        $this->entity_manager = $an_em;
    }

    public function __invoke(AddFilmRequest $request)
    {
        $film = Film::register($request->name(), $request->year(), $request->date(), $request->url());
        $this->entity_manager->persist($film);
        $this->entity_manager->flush();

    }
}