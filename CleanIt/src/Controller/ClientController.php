<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;
use App\Form\ClientType;
use App\Form\ClientModifierType;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends AbstractController
{
    #[Route('/client', name: 'client')]
    public function index(): Response
    {
        return $this->render('client/index.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
    public function ajouterClient(Request $request){
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);{}
    
        if ($form->isSubmitted() && $form->isValid()) {
    
                $client = $form->getData();
    
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($client);
                $entityManager->flush();
    
            return $this->render('client/consulter.html.twig', ['client' => $client,]);
        }
        else
            {
                return $this->render('client/ajouter.html.twig', array('form' => $form->createView(),));
        }
    }
        public function consulterClient($id){
            $client = $this->getDoctrine()
                ->getRepository(Client::class)
                ->find($id);
        
                if (!$client) {
                    throw $this->createNotFoundException(
                    'Aucun client trouvé avec le numéro '.$id
                    );
                }
        
                return $this->render('client/consulter.html.twig', [
                    'client' => $client,]);
        }
        public function listerClient(){
            $repository = $this->getDoctrine()->getRepository(Client::class);
            $client = $repository->findAll();
            return $this->render('client/lister.html.twig', [
                'pClient' => $client,]);	
        }

        public function supprimerClient($id, Request $request){
            $client= $this ->getDoctrine()
               -> getRepository(Client::class)
               -> find($id);
               if (!$client) {
                   throw $this->createNotFoundException('Aucun client trouvé avec le numéro '.$id);
               }
               else
               {
                   $entityManager = $this->getDoctrine()->getManager();
                   $entityManager->remove($client);
                   $entityManager->flush();
               }
    
               
           return $this->render('client/supprimer.html.twig');
        }

        public function modifierClient($id, Request $request){
 
            $client = $this->getDoctrine()
                ->getRepository(Client::class)
                ->find($id);
         
            if (!$client) {
                throw $this->createNotFoundException('Aucun client trouvé avec le numéro '.$id);
            }
            else
            {
                    $form = $this->createForm(ClientModifierType::class, $client);
                    $form->handleRequest($request);
         
                    if ($form->isSubmitted() && $form->isValid()) {
         
                         $client = $form->getData();
                         $entityManager = $this->getDoctrine()->getManager();
                         $entityManager->persist($client);
                         $entityManager->flush();
                         return $this->render('client/consulter.html.twig', ['client' => $client,]);
                   }
                   else{
                        return $this->render('client/modifier.html.twig', array('form' => $form->createView(),));
                   }
                }
         }
}
