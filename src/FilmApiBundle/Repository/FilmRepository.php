<?php

namespace FilmApiBundle\Repository;

use Doctrine\ORM\EntityRepository;
use FilmApiBundle\Entity\FilmRepositoryInterface;

class FilmRepository extends EntityRepository implements FilmRepositoryInterface
{

	public function findById($a_raw_id)
	{
		return $this->find($a_raw_id);
	}

	public function updateFilms()
	{
		$this->_em->flush();
	}

	public function listFilms()
	{

	}

}
