<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MorevideosController extends AbstractController
{
    #[Route('/morevideos', name: 'app_morevideos')]
    public function index(): Response
    {
        return $this->render('morevideos/index.html.twig', [
            'controller_name' => 'MorevideosController',
        ]);
    }
}
