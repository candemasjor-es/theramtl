<?php

namespace App\Controller;

use App\Entity\Juegosvideos;
use App\Form\JuegosvideosType;
use App\Repository\JuegosvideosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/juegosvideos')]
class JuegosvideosController extends AbstractController
{
    #[Route('/', name: 'app_juegosvideos_index', methods: ['GET'])]
    public function index(JuegosvideosRepository $juegosvideosRepository): Response
    {
        return $this->render('juegosvideos/index.html.twig', [
            'juegosvideos' => $juegosvideosRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_juegosvideos_new', methods: ['GET', 'POST'])]
    public function new(Request $request, JuegosvideosRepository $juegosvideosRepository): Response
    {
        $juegosvideo = new Juegosvideos();
        $form = $this->createForm(JuegosvideosType::class, $juegosvideo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $juegosvideosRepository->save($juegosvideo, true);

            return $this->redirectToRoute('app_juegosvideos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('juegosvideos/new.html.twig', [
            'juegosvideo' => $juegosvideo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_juegosvideos_show', methods: ['GET'])]
    public function show(Juegosvideos $juegosvideo): Response
    {
        return $this->render('juegosvideos/show.html.twig', [
            'juegosvideo' => $juegosvideo,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_juegosvideos_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Juegosvideos $juegosvideo, JuegosvideosRepository $juegosvideosRepository): Response
    {
        $form = $this->createForm(JuegosvideosType::class, $juegosvideo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $juegosvideosRepository->save($juegosvideo, true);

            return $this->redirectToRoute('app_juegosvideos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('juegosvideos/edit.html.twig', [
            'juegosvideo' => $juegosvideo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_juegosvideos_delete', methods: ['POST'])]
    public function delete(Request $request, Juegosvideos $juegosvideo, JuegosvideosRepository $juegosvideosRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$juegosvideo->getId(), $request->request->get('_token'))) {
            $juegosvideosRepository->remove($juegosvideo, true);
        }

        return $this->redirectToRoute('app_juegosvideos_index', [], Response::HTTP_SEE_OTHER);
    }
}
