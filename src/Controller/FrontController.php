<?php

namespace App\Controller;

use App\Repository\AtelierRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/', name: 'homepage')]

    public function index(AtelierRepository $atelierRepository): Response
    {
        $ateliers = $atelierRepository->findAll();

        return $this->render('front/index.html.twig', [
            'ateliers' => $ateliers,
        ]);
    }
}
