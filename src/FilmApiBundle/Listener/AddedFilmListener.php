<?php

namespace FilmApiBundle\Listener;

use FilmApiBundle\Event\FilmAdded;

final class AddedFilmListener
{

	public function onFilmAdded(FilmAdded $event)
	{
		echo 'Listener has been reached thanks to event';
	}

}
