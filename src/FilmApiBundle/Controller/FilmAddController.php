<?php

namespace FilmApiBundle\Controller;

use Exception;
use FilmApiBundle\Service\AddFilmRequest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class FilmAddController extends Controller
{

    public function indexAction(Request $request)
    {
        try {
            $name = $request->query->get('name');
            $year = $request->query->get('year');
            $date = $request->query->get('date');
            $url = $request->query->get('url');

            $add_film_service = $this->get('add_film_use_case');

            $add_film_request = new AddFilmRequest($name, $year, $date, $url);
            $add_film_service->__invoke($add_film_request);

            return new JsonResponse(array('message' => 'OK'));

        } catch (Exception $ex) {
            return new JsonResponse(array('message' => 'Error'));
        }
    }

}
