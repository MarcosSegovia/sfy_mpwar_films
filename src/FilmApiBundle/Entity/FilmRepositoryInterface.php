<?php

namespace FilmApiBundle\Entity;

interface FilmRepositoryInterface
{

	public function findById($a_raw_id);

	public function listFilms();

	public function updateFilms();

}
