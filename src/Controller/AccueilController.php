<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Client;

class AccueilController extends AbstractController
{
    public function index(): Response
    {
        return $this->redirect('home');
    }
    public function home(): Response

    {
        $role = $this -> getUser() -> getRoles()[0];
        if ($role =='ROLE_HOTLINER'){
                return $this->redirecttoRoute('clientLister');
            }
            if ($role =='ROLE_COMMERCIAL'){
                return $this->redirecttoRoute('enseigneLister');
            }
            if ($role =='ROLE_ADMIN'){
                return $this->redirecttoRoute('employeLister');
            }
    }

    public function profil(): Response
    {
        return $this->render('personnel/profil.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
}
