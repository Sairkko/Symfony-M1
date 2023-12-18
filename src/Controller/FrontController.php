<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/', name: 'homepage')]

    public function index(): Response
    {


        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }




}