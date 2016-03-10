<?php

namespace FilmApiBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FilmRemoveController extends Controller
{
    /**
     * @Route("/film/remove", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $id = $request->request->get('id');

        $obj_RemoveFilmUseCase= $this->getContainer()->get('RemoveFilmUsecase');
        $obj_RemoveFilmUseCase($id);

        return new JsonResponse(array('message' => 'OK'));
    }
}
