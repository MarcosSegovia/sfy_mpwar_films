<?php

namespace FilmApiBundle\Controller;

use Exception;
use FilmApiBundle\Service\EditFilmRequest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class FilmEditController extends Controller
{

    public function indexAction(Request $request)
    {
        try {
            $id = $request->get('id');
            $name = $request->query->get('name');
            $year = $request->query->get('year');
            $date = $request->query->get('date');
            $url = $request->query->get('url');

            $edit_film_service = $this->get('edit_film_use_case');
            $new_edit_film_request = new EditFilmRequest($id, $name, $year, $date, $url);
            $edit_film_service->__invoke($new_edit_film_request);

            return new JsonResponse(array('message' => 'OK'));
        } catch (Exception $ex) {
            return new JsonResponse(array('message' => 'Error'));
        }
    }

}
