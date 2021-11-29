<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\TypeEnseigne;
use App\Form\TypeEnseigneType;
use App\Form\TypeEnseigneModifierType;
use Symfony\Component\HttpFoundation\Request;

class TypeEnseigneController extends AbstractController
{
    #[Route('/type/enseigne', name: 'type_enseigne')]
    public function index(): Response
    {
        return $this->render('type_enseigne/index.html.twig', [
            'controller_name' => 'TypeEnseigneController',
        ]);
    }
    public function ajouterTypeEnseigne(Request $request){
        $typeEnseigne = new TypeEnseigne();
        $form = $this->createForm(TypeEnseigneType::class, $typeEnseigne);
        $form->handleRequest($request);{}
    
        if ($form->isSubmitted() && $form->isValid()) {
    
                $typeEnseigne = $form->getData();
    
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($typeEnseigne);
                $entityManager->flush();
    
            return $this->render('type_enseigne/consulter.html.twig', ['typeEnseigne' => $typeEnseigne,]);
        }
        else
            {
                return $this->render('type_enseigne/ajouter.html.twig', array('form' => $form->createView(),));
        }
    }
    public function consulterTypeEnseigne($id){
        $typeEnseigne = $this->getDoctrine()
            ->getRepository(TypeEnseigne::class)
            ->find($id);
    
            if (!$typeEnseigne) {
                throw $this->createNotFoundException(
                'Aucun typeEnseigne trouvé avec le numéro '.$id
                );
            }
    
            return $this->render('type_enseigne/consulter.html.twig', [
                'typeEnseigne' => $typeEnseigne,]);
    }

    public function listerTypeEnseigne(){
        $repository = $this->getDoctrine()->getRepository(TypeEnseigne::class);
        $typeEnseigne = $repository->findAll();
        return $this->render('type_enseigne/lister.html.twig', [
            'pTypeEnseigne' => $typeEnseigne,]);	
    }

    public function modifierTypeEnseigne($id, Request $request){
 
        $typeEnseigne = $this->getDoctrine()
            ->getRepository(TypeEnseigne::class)
            ->find($id);
     
        if (!$typeEnseigne) {
            throw $this->createNotFoundException('Aucun type enseigne trouvé avec le numéro '.$id);
        }
        else
        {
                $form = $this->createForm(TypeEnseigneModifierType::class, $typeEnseigne);
                $form->handleRequest($request);
     
                if ($form->isSubmitted() && $form->isValid()) {
     
                     $typeEnseigne = $form->getData();
                     $entityManager = $this->getDoctrine()->getManager();
                     $entityManager->persist($typeEnseigne);
                     $entityManager->flush();
                     return $this->render('type_Enseigne/consulter.html.twig', ['typeEnseigne' => $typeEnseigne,]);
               }
               else{
                    return $this->render('type_Enseigne/modifier.html.twig', array('form' => $form->createView(),));
               }
            }
     }
     public function supprimerTypeEnseigne($id, Request $request){
        $typeEnseigne= $this ->getDoctrine()
           -> getRepository(TypeEnseigne::class)
           -> find($id);
           if (!$typeEnseigne) {
               throw $this->createNotFoundException('Aucun type enseigne trouvé avec le numéro '.$id);
           }
           else
           {
               $entityManager = $this->getDoctrine()->getManager();
               $entityManager->remove($typeEnseigne);
               $entityManager->flush();
           }

           
       return $this->render('type_enseigne/supprimer.html.twig');
    }


}



