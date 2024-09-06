<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PublicHomeController extends AbstractController
{
    #[Route('/public/home', name: 'app_public_home')]
    public function index(): Response
    {
        return $this->render('public_home/index.html.twig', [
            'controller_name' => 'PublicHomeController',
        ]);
    }
}
