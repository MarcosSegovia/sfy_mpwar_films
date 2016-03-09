<?php

namespace FilmApiBundle\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

class FilmRepository extends EntityRepository
{
	public function listFilms()
	{
		echo "co";
	}
}