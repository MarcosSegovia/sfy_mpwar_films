<?php

namespace FilmApiBundle\Controller;

use FilmApiBundle\Service\EditFilmRequest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class FilmEditController extends Controller
{

    public function indexAction(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $year = $request->get('year');
        $date = $request->get('date');
        $url = $request->get('url');

        $edit_film_service = $this->get('edit_film_use_case');
        $new_edit_film_request = new EditFilmRequest($id, $name, $year, $date, $url);
        $edit_film_service->__invoke($new_edit_film_request);

        return new JsonResponse(array('message' => 'OK'));
    }

}
