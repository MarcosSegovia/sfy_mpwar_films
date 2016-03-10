<?php

namespace FilmApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FilmEditController extends Controller
{
    /**
     * @Route("/film/edit", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $name = $request->request->get('name');
        $year = $request->request->get('year');
        $date = $request->request->get('date');
        $url = $request->request->get('url');

        $obj_EditFilmUseCase = $this->getContainer()->get('EditFilmUseCase');
        $obj_EditFilmUseCase($name,$year,$date,$url);

        return new JsonResponse(array('message' => 'OK'));
    }
}
