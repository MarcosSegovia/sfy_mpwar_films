<?php

namespace FilmApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AddFilmController extends Controller
{
	/**
	 * @Route("/add", name="add")
	 */
	public function indexAction(Request $request)
	{
		$add_film_service = $this->get('add_film_use_case');
		$add_film_service->__invoke();
	}
}
