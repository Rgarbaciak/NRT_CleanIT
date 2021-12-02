<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    public function index(): Response
    {
        return $this->redirect('home');
    }
    public function home(): Response
    {
        return $this->render('accueil/home.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    public function profil(): Response
    {
        return $this->render('personnel/profil.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
}
