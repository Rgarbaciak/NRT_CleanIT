<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Employe;
use App\Form\UserType;
use App\Form\UserModifierType;
use App\Form\ProfilModifierType;
use Symfony\Component\HttpFoundation\Request;


class ProfilController extends AbstractController
{
    #[Route('/personnel/profil', name: 'profil')]

    public function index(): Response
    {
        return $this->render('personnel/profil.html.twig', [
            'controller_name' => 'ProfilController',
        ]);
    }
    
    public function modifierProfil($id, Request $request){
 
        $profil = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($id);
        $employe = $profil->getEmploye();
     
        if (!$employe) {
            throw $this->createNotFoundException('Aucun profil trouvé avec le numéro '.$id);
        }
        else
        {
                $form = $this->createForm(ProfilModifierType::class, $employe);
                $form->handleRequest($request);
     
                if ($form->isSubmitted() && $form->isValid()) {
     
                     $employe = $form->getData();
                     $entityManager = $this->getDoctrine()->getManager();
                     $entityManager->persist($employe);
                     $entityManager->flush();
                     return $this->render('personnel/profil.html.twig', ['profil' => $employe,]);
               }
               else{
                    return $this->render('personnel/modifier.html.twig', array('form' => $form->createView(),));
               }
            }
     }



}
