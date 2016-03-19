<?php

namespace FilmApiBundle\Service;

final class AddFilmRequest
{
	private $name;

	private $year;

	private $date;

	private $url;

	public function __construct(
		$a_name,
		$a_year,
		$a_date,
		$an_url
	)
	{
		$this->name = $a_name;
		$this->year = $a_year;
		$this->date = $a_date;
		$this->url  = $an_url;
	}

	public function name()
	{
		return $this->name;
	}

	public function year()
	{
		return $this->year;
	}

	public function date()
	{
		return $this->date;
	}

	public function url()
	{
		return $this->url;
	}
}