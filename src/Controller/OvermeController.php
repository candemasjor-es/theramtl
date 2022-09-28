<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OvermeController extends AbstractController
{
    #[Route('/overme', name: 'app_overme')]
    public function index(): Response
    {
        return $this->render('overme/index.html.twig', [
            'controller_name' => 'OvermeController',
        ]);
    }
}
