<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Enseigne;
use App\Form\EnseigneType;
use Symfony\Component\HttpFoundation\Request;

class EnseigneController extends AbstractController
{
    #[Route('/enseigne', name: 'enseigne')]
    public function index(): Response
    {
        return $this->render('enseigne/index.html.twig', [
            'controller_name' => 'EnseigneController',
        ]);
    }

    public function ajouterEnseigne(Request $request){
        $enseigne = new enseigne();
        $form = $this->createForm(EnseigneType::class, $enseigne);
        $form->handleRequest($request);{}
    
        if ($form->isSubmitted() && $form->isValid()) {
    
                $enseigne = $form->getData();
    
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($enseigne);
                $entityManager->flush();
    
            return $this->render('enseigne/consulter.html.twig', ['enseigne' => $enseigne,]);
        }
        else
            {
                return $this->render('enseigne/ajouter.html.twig', array('form' => $form->createView(),));
        }
    }
    public function consulterEnseigne($id){
        $enseigne = $this->getDoctrine()
            ->getRepository(Enseigne::class)
            ->find($id);
    
            if (!$enseigne) {
                throw $this->createNotFoundException(
                'Aucun enseigne trouvé avec le numéro '.$id
                );
            }
    
            return $this->render('enseigne/consulter.html.twig', [
                'enseigne' => $enseigne,]);
    }

    public function listerEnseigne(){
        $repository = $this->getDoctrine()->getRepository(Enseigne::class);
        $enseigne = $repository->findAll();
        return $this->render('enseigne/lister.html.twig', [
            'pEnseigne' => $enseigne,]);	
    }

}
