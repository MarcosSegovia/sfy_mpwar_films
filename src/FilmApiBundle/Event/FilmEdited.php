<?php

namespace FilmApiBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class FilmEdited extends Event
{
	const NAME = 'film.edited';
}
