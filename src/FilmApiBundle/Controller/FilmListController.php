<?php

namespace FilmApiBundle\Controller;

use Exception;
use FilmApiBundle\Entity\Film;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FilmListController extends Controller
{


    public function allAction()
    {
        try {
            $list_films_service = $this->get('list_films_use_case');
            $result = $list_films_service->__invoke();
            $serializedEntities = $this->container->get('serializer')->serialize($result, 'json');

            return new Response($serializedEntities);
        } catch (Exception $ex) {
            return new JsonResponse(array('message' => 'Error'));
        }
    }

    public function getAction($id)
    {
        try {
            $show_films_service = $this->get('show_films_use_case');
            $the_film = $show_films_service->__invoke($id);
            if (!$the_film instanceof Film) {
                throw new NotFoundHttpException('Film not found');
            }
            $serialized_film = $this->container->get('serializer')->serialize($the_film, 'json');
            return new Response($serialized_film);
        } catch (Exception $ex) {
            return new JsonResponse(array('message' => 'Error'));
        }
    }
}
