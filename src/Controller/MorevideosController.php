<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\JuegosvideosRepository;

class MorevideosController extends AbstractController
{
    #[Route('/morevideos', name: 'app_morevideos', methods: ['GET'])]
    public function index(JuegosvideosRepository $juegosvideosRepository): Response
    {
        return $this->render('morevideos/index.html.twig', [
            'juegosvideos' => $juegosvideosRepository->findBy(array(), array('id'=>'DESC')),
        ]);
    }
}
