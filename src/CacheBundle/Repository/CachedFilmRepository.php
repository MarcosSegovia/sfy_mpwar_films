<?php

namespace CacheBundle\Repository;

use FilmApiBundle\Entity\FilmRepositoryInterface;

class CachedFilmRepository implements FilmRepositoryInterface
{
	private $film_repository;

	public function __construct(FilmRepositoryInterface $a_film_repository)
	{
		$this->film_repository = $a_film_repository;
	}

	public function findById($a_raw_id)
	{
		return $this->film_repository->findById($a_raw_id);
	}

	public function listFilms()
	{
		return $this->film_repository->listFilms();
	}

	public function updateFilms()
	{
		$this->film_repository->updateFilms();
	}
}