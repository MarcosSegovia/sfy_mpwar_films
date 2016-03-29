<?php

namespace FilmApiBundle\Service;

class DeleteFilmRequest
{
    private $id;

    public function __construct($a_raw_id)
    {
        $this->id = $a_raw_id;
    }

    public function id()
    {
        return $this->id;
    }

}
