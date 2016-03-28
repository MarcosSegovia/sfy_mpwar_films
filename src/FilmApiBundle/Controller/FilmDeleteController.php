<?php

namespace FilmApiBundle\Controller;

use FilmApiBundle\Service\DeleteFilmRequest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class FilmDeleteController extends Controller
{
    /**
     * @Route("/film/delete", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $id = $request->get('id');

        $remove_film_service = $this->get('delete_film_use_case');
        $new_delete_film_request = new DeleteFilmRequest($id);
        $remove_film_service->__invoke($new_delete_film_request);

        return new JsonResponse(array('message' => 'OK'));
    }

}
