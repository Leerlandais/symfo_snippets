<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PublicHomeController extends AbstractController
{
    #[Route('/', name: 'app_public_home')]
    public function index(): Response
    {
        return $this->render('public_home/index.html.twig', [
            'controller_name' => 'PublicHomeController',
        ]);
    }

    #[Route('/login', name: 'app_public_login')]
    public function login(): Response
    {
        return $this->render('public_home/public.login.html.twig', [
            'controller_name' => 'PublicHomeController',
        ]);
    }
}
