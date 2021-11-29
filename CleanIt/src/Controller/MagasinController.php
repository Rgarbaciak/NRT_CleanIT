<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Magasin;
use App\Form\MagasinType;
use Symfony\Component\HttpFoundation\Request;

class MagasinController extends AbstractController
{
    #[Route('/magasin', name: 'magasin')]
    public function index(): Response
    {
        return $this->render('magasin/index.html.twig', [
            'controller_name' => 'MagasinController',
        ]);
    }
    public function ajouterMagasin(Request $request){
        $magasin = new Magasin();
        $form = $this->createForm(MagasinType::class, $magasin);
        $form->handleRequest($request);{}
    
        if ($form->isSubmitted() && $form->isValid()) {
    
                $magasin = $form->getData();
    
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($magasin);
                $entityManager->flush();
    
            return $this->render('magasin/consulter.html.twig', ['magasin' => $magasin,]);
        }
        else
            {
                return $this->render('magasin/ajouter.html.twig', array('form' => $form->createView(),));
        }
    }
    public function consulterMagasin($id){
        $magasin = $this->getDoctrine()
            ->getRepository(Magasin::class)
            ->find($id);
    
            if (!$magasin) {
                throw $this->createNotFoundException(
                'Aucun magasin trouvé avec le numéro '.$id
                );
            }
    
            return $this->render('magasin/consulter.html.twig', [
                'magasin' => $magasin,]);
    }

    public function listerMagasin(){
        $repository = $this->getDoctrine()->getRepository(Magasin::class);
        $magasin = $repository->findAll();
        return $this->render('magasin/lister.html.twig', [
            'pMagasin' => $magasin,]);	
    }
    public function supprimerMagasin($id, Request $request){
        $magasin= $this ->getDoctrine()
           -> getRepository(Magasin::class)
           -> find($id);
           if (!$magasin) {
               throw $this->createNotFoundException('Aucun magasin trouvé avec le numéro '.$id);
           }
           else
           {
               $entityManager = $this->getDoctrine()->getManager();
               $entityManager->remove($magasin);
               $entityManager->flush();
           }

           
       return $this->render('magasin/supprimer.html.twig');
    }

}
