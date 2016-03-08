<?php

namespace FilmApiBundle\Entity;

use Ramsey\Uuid\Uuid;

final class Film
{

    private $id;
    private $name;
    private $year;
    private $date;
    private $url;

    public function __construct($an_id, $a_name, $an_year, $a_date, $an_url)
    {
        $this->id = $an_id;
        $this->name = $a_name;
        $this->year = $an_year;
        $this->date = $a_date;
        $this->url = $an_url;
    }

    public static function register($a_name, $an_year, $a_date, $an_url)
    {
        $uuid5 = Uuid::uuid5(Uuid::NAMESPACE_DNS, 'php.net');
        $film = new static($uuid5->toString(), $a_name, $an_year, $a_date, $an_url);
        return $film;
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