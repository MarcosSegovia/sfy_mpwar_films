<?php

namespace FilmApiBundle\Exceptions;


use Exception;

final class FilmException extends Exception
{

    public static function throwBecauseOf($a_message)
    {
        throw new self($a_message);
    }
}