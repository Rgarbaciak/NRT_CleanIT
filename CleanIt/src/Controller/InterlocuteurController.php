<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Interlocuteur;
use App\Form\InterlocuteurType;
use App\Form\InterlocuteurModifierType;
use Symfony\Component\HttpFoundation\Request;

class InterlocuteurController extends AbstractController
{
    #[Route('/interlocuteur', name: 'interlocuteur')]
    public function index(): Response
    {
        return $this->render('interlocuteur/index.html.twig', [
            'controller_name' => 'InterlocuteurController',
        ]);
    }
    public function ajouterInterlocuteur(Request $request){
        $interlocuteur = new Interlocuteur();
        $form = $this->createForm(InterlocuteurType::class, $interlocuteur);
        $form->handleRequest($request);{}
    
        if ($form->isSubmitted() && $form->isValid()) {
    
                $interlocuteur = $form->getData();
    
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($interlocuteur);
                $entityManager->flush();
    
            return $this->render('interlocuteur/consulter.html.twig', ['interlocuteur' => $interlocuteur,]);
        }
        else
            {
                return $this->render('interlocuteur/ajouter.html.twig', array('form' => $form->createView(),));
        }
    }
    public function consulterInterlocuteur($id){
        $interlocuteur = $this->getDoctrine()
            ->getRepository(Interlocuteur::class)
            ->find($id);
    
            if (!$interlocuteur) {
                throw $this->createNotFoundException(
                'Aucun interlocuteur trouvé avec le numéro '.$id
                );
            }
    
            return $this->render('interlocuteur/consulter.html.twig', [
                'interlocuteur' => $interlocuteur,]);
    }
    public function listerInterlocuteur(){
        $repository = $this->getDoctrine()->getRepository(Interlocuteur::class);
        $interlocuteur = $repository->findAll();
        return $this->render('interlocuteur/lister.html.twig', [
            'pInterlocuteur' => $interlocuteur,]);	
    }

    public function modifierInterlocuteur($id, Request $request){
 
        $interlocuteur = $this->getDoctrine()
            ->getRepository(Interlocuteur::class)
            ->find($id);
     
        if (!$interlocuteur) {
            throw $this->createNotFoundException('Aucun interlocuteur trouvé avec le numéro '.$id);
        }
        else
        {
                $form = $this->createForm(InterlocuteurModifierType::class, $interlocuteur);
                $form->handleRequest($request);
     
                if ($form->isSubmitted() && $form->isValid()) {
     
                     $interlocuteur = $form->getData();
                     $entityManager = $this->getDoctrine()->getManager();
                     $entityManager->persist($interlocuteur);
                     $entityManager->flush();
                     return $this->render('interlocuteur/consulter.html.twig', ['interlocuteur' => $interlocuteur,]);
               }
               else{
                    return $this->render('interlocuteur/modifier.html.twig', array('form' => $form->createView(),));
               }
            }
     }
}
