<?php

namespace FilmApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FilmListController extends Controller
{
    /**
     * @Route("/film/list", name="film-list")
     */
    public function indexAction(Request $request)
    {
        $name = $request->request->get('name');
        $year = $request->request->get('year');
        $date = $request->request->get('date');
        $url = $request->request->get('url');

        $obj_ListfilmUsecase = $this->getContainer()->get('ListfilmUsecase');
        $result = $obj_ListfilmUsecase();

        return new JsonResponse(array('list' => $result));
    }
}
