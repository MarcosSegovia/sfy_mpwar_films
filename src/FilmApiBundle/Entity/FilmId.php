<?php

namespace FilmApiBundle\Entity;


use Ramsey\Uuid\Uuid;

class FilmId
{

    private $id;

    function __construct($id = null)
    {
        $this->id = null === $id ? Uuid::uuid4()->toString() : $id;
    }

    public function id()
    {
        return $this->id;
    }

}