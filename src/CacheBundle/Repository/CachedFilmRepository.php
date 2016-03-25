<?php

namespace CacheBundle\Repository;

use FilmApiBundle\Entity\FilmRepositoryInterface;
use JMS\Serializer\SerializerInterface;

class CachedFilmRepository implements FilmRepositoryInterface
{
	private $film_repository;
	private $serializer;

	const CACHE_FILE_PATH = '/../Cache/list_films.txt';

	public function __construct(
		FilmRepositoryInterface $a_film_repository,
		SerializerInterface $a_serializer
	)
	{
		$this->film_repository = $a_film_repository;
		$this->serializer      = $a_serializer;
	}

	public function findById($a_raw_id)
	{
		return $this->film_repository->findById($a_raw_id);
	}

	public function listFilms()
	{
		if (!file_exists(__DIR__ . self::CACHE_FILE_PATH))
		{
			file_put_contents(__DIR__ . self::CACHE_FILE_PATH,
				$this->serializer->serialize($this->film_repository->listFilms(), 'json')
			);

			return $this->serializer->deserialize(file_get_contents(__DIR__ . self::CACHE_FILE_PATH),
				'array<FilmApiBundle\Entity\Film>',
				'json'
			);
		}

		return $this->serializer->deserialize(file_get_contents(__DIR__ . self::CACHE_FILE_PATH),
			'array<FilmApiBundle\Entity\Film>',
			'json'
		);
	}

	public function updateFilms()
	{
		$this->film_repository->updateFilms();
	}

	public function onFilmAdded()
	{
		file_put_contents(__DIR__ . self::CACHE_FILE_PATH,
			$this->serializer->serialize($this->film_repository->listFilms(), 'json')
		);
	}

	public function onFilmEdited()
	{
		file_put_contents(__DIR__ . self::CACHE_FILE_PATH,
			$this->serializer->serialize($this->film_repository->listFilms(), 'json')
		);
	}

	public function onFilmDeleted()
	{
		file_put_contents(__DIR__ . self::CACHE_FILE_PATH,
			$this->serializer->serialize($this->film_repository->listFilms(), 'json')
		);
	}

}
