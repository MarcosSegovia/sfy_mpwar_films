<?php

namespace FilmApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class FilmListController extends Controller
{
    /**
     * @Route("/film/list", name="film-list")
     */
    public function indexAction()
    {
        $list_films_service = $this->get('list_films_use_case');
        $result = $list_films_service->__invoke();
        $serializedEntities = $this->container->get('serializer')->serialize($result, 'json');
        
        return new Response($serializedEntities);
    }

}
