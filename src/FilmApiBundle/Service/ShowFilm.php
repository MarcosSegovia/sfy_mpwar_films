<?php


namespace FilmApiBundle\Service;


use FilmApiBundle\Entity\FilmRepositoryInterface;

final class ShowFilm
{
    private $entity_repository;

    public function __construct(
        FilmRepositoryInterface $an_er
    )
    {
        $this->entity_repository = $an_er;
    }

    public function __invoke($an_id)
    {
        return $this->entity_repository->findById($an_id);
    }
}