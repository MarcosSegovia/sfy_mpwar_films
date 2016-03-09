<?php

namespace FilmApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FilmAddController extends Controller
{
    /**
     * @Route("/Film/Add", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $name = $request->request->get('name');
        $year = $request->request->get('year');
        $date = $request->request->get('date');
        $url = $request->request->get('url');

        $obj_AddFilmUseCase = $this->getContainer()->get('AddFilmUseCase');
        $obj_AddFilmUseCase($name,$year,$date,$url);

        return new JsonResponse(array('message' => 'OK'));

    }
}
