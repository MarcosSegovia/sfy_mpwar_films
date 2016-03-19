<?php

namespace FilmApiBundle\Service;

use FilmApiBundle\Entity\FilmRepositoryInterface;

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
		return $this->entity_repository->listFilms();
	}

}
