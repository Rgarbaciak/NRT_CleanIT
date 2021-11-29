<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AccueilController extends AbstractController
{
 
 
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
    public function home(): Response
    {
        return $this->render('accueil/home.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

<<<<<<< HEAD
   




=======
    public function profil(): Response
    {
        return $this->render('personnel/profil.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
>>>>>>> 78fe3ac6bbaba8314bd9bb8eca783e8a77b9fdba
}
