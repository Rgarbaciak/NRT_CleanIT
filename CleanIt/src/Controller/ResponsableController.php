<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Responsable;
use App\Form\ResponsableType;
use Symfony\Component\HttpFoundation\Request;


class ResponsableController extends AbstractController
{
    #[Route('/responsable', name: 'responsable')]
    public function index(): Response
    {
        return $this->render('responsable/index.html.twig', [
            'controller_name' => 'ResponsableController',
        ]);
    }
    public function ajouterResponsable(Request $request){
        $responsable = new Responsable();
        $form = $this->createForm(ResponsableType::class, $responsable);
        $form->handleRequest($request);{}
    
        if ($form->isSubmitted() && $form->isValid()) {
    
                $responsable = $form->getData();
    
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($responsable);
                $entityManager->flush();
    
            return $this->redirect('ajouterResponsable',200);;
        }
        else
            {
                return $this->render('responsable/ajouter.html.twig', array('form' => $form->createView(),));
        }
    }
    public function consulterResponsable($id){
        $responsable = $this->getDoctrine()
            ->getRepository(Responsable::class)
            ->find($id);
    
            if (!$responsable) {
                throw $this->createNotFoundException(
                'Aucun responsable trouvé avec le numéro '.$id
                );
            }
    
            return $this->render('responsable/consulter.html.twig', [
                'responsable' => $responsable,]);
    }
    public function listerResponsable(){
        $repository = $this->getDoctrine()->getRepository(Responsable::class);
        $responsable = $repository->findAll();
        return $this->render('responsable/lister.html.twig', [
            'pResponsable' => $responsable,]);	
    }

    public function supprimerResponsable($id, Request $request){
        $responsable= $this ->getDoctrine()
           -> getRepository(Responsable::class)
           -> find($id);
           if (!$responsable) {
               throw $this->createNotFoundException('Aucun responsable trouvé avec le numéro '.$id);
           }
           else
           {
               $entityManager = $this->getDoctrine()->getManager();
               $entityManager->remove($responsable);
               $entityManager->flush();
           }

           
       return $this->render('responsable/supprimer.html.twig');
    }

}
