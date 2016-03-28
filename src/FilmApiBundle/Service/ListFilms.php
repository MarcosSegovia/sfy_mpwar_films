<?php

namespace FilmApiBundle\Service;

use FilmApiBundle\Entity\FilmRepositoryInterface;
use FilmApiBundle\Exceptions\FilmException;

final class ListFilms
{
    private $entity_repository;

    public function __construct(
        FilmRepositoryInterface $an_er
    )
    {
        $this->entity_repository = $an_er;
    }

    public function __invoke()
    {
        $result = null;
        try {
            $result = $this->entity_repository->listFilms();

        } catch (\Exception $ex) {
            FilmException::throwBecauseOf("Caught exception: " . $ex->getMessage() . "\n");
        } finally {
            return $result;
        }
    }

}
