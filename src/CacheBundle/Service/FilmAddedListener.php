<?php

namespace CacheBundle\Service;

use FilmApiBundle\Event\FilmAdded;

final class FilmAddedListener
{

	public function onFilmAdded(FilmAdded $event)
	{
		echo 'Listener has been reached thanks to event';
	}

}
