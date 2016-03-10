<?php

namespace FilmApiBundle\Controller;

use FilmApiBundle\Service\AddFilmRequest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class FilmAddController extends Controller
{
    /**
     * @Route("/film/add", name="film")
     */
    public function indexAction(Request $request)
    {
        $name = $request->get('name');
        $year = $request->get('year');
        $date = $request->get('date');
        $url = $request->get('url');


        $add_film_service = $this->get('add_film_use_case');

        $add_film_request = new AddFilmRequest($name, $year, $date, $url);
        $add_film_service->__invoke($add_film_request);

        return new JsonResponse(array('message' => 'OK'));

    }
}
