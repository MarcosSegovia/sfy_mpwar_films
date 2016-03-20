<?php

namespace CacheBundle\Repository;

use FilmApiBundle\Entity\FilmRepositoryInterface;

class CachedFilmRepository implements FilmRepositoryInterface
{
	private $film_repository;
	private $array_cached_films;

	public function __construct(FilmRepositoryInterface $a_film_repository)
	{
		$this->film_repository    = $a_film_repository;
		$this->array_cached_films = NULL;
	}

	public function findById($a_raw_id)
	{
		return $this->film_repository->findById($a_raw_id);
	}

	public function listFilms()
	{
		dump($this->array_cached_films);
		if ($this->array_cached_films === NULL)
		{
			$this->array_cached_films = $this->film_repository->listFilms();
		}

		return $this->array_cached_films;
	}

	public function updateFilms()
	{
		$this->film_repository->updateFilms();
	}

	public function onFilmAdded()
	{
		$this->array_cached_films = $this->film_repository->listFilms();
	}

	public function onFilmEdited()
	{
		$this->array_cached_films = $this->film_repository->listFilms();
	}

	public function onFilmDeleted()
	{
		$this->array_cached_films = $this->film_repository->listFilms();
	}
}