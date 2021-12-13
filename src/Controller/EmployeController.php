<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Employe;
use App\Entity\User;
use App\Form\EmployeType;
use App\Form\EmployeModifierType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class EmployeController extends AbstractController
{
    #[Route('/employe', name: 'employe')]
    public function index(): Response
    {
        return $this->render('employe/index.html.twig', [
            'controller_name' => 'EmployeController',
        ]);
    }

    public function ajouterEmploye(Request $request,UserPasswordHasherInterface $userPasswordHasher){
        $employe = new Employe();
        $user = new User();
        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);{}
        
    
        if ($form->isSubmitted() && $form->isValid()) {

                $mdp= "123456";
                $employe = $form->getData();

                $mailForm = $form->get('mail')->getData();
                $user->setEmail($mailForm);

                $roles[]= $form ->get('roles')->getData();
                $user->setRoles($roles);

                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                            $user,
                            $mdp
                            
                        )
                    );
                $employe->setUser($user);
    
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($employe);
                $entityManager->flush();
    
            return $this->render('employe/consulter.html.twig', ['employe' => $employe,]);
        }
        else
            {
                return $this->render('employe/ajouter.html.twig', array('form' => $form->createView(),));
        }
    }
    public function consulterEmploye($id){
        $employe = $this->getDoctrine()
            ->getRepository(Employe::class)
            ->find($id);
    
            if (!$employe) {
                throw $this->createNotFoundException(
                'Aucun employe trouvé avec le numéro '.$id
                );
            }
    
            return $this->render('employe/consulter.html.twig', [
                'employe' => $employe,]);
    }

    public function listerEmploye(){
        $repository = $this->getDoctrine()->getRepository(Employe::class);
        $employe = $repository->findAll();
        return $this->render('employe/lister.html.twig', [
            'pEmploye' => $employe,]);	
    }

    public function modifierEmploye($id, Request $request){
 
        //récupération de l'étudiant dont l'id est passé en paramètre
        $employe = $this->getDoctrine()
            ->getRepository(Employe::class)
            ->find($id);
     
        if (!$employe) {
            throw $this->createNotFoundException('Aucune employe trouvé avec le numéro '.$id);
        }
        else
        {
                $form = $this->createForm(EmployeModifierType::class, $employe);
                $form->handleRequest($request);
     
                if ($form->isSubmitted() && $form->isValid()) {
     
                     $employe = $form->getData();
                     $user =$employe ->getUser();
                     $entityManager = $this->getDoctrine()->getManager();
                     $roles[]= $form ->get('roles')->getData();
                     $user->setRoles($roles);
                     $employe->setUser($user);

                     $entityManager->persist($employe);
                     $entityManager->flush();
                     return $this->render('employe/consulter.html.twig', ['employe' => $employe,]);
               }
               else{
                    return $this->render('employe/modifier.html.twig', array('form' => $form->createView(),));
               }
            }
     }



     public function supprimerEmploye($id, Request $request){
         $employe= $this ->getDoctrine()
            -> getRepository(Employe::class)
            -> find($id);
            if (!$employe) {
                throw $this->createNotFoundException('Aucune employe trouvé avec le numéro '.$id);
            }
            else
            {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($employe);
                $entityManager->flush();
            }

            
        return $this->render('employe/supprimer.html.twig');
     }
     public function reinitialliserEmploye($id, Request $request,UserPasswordHasherInterface $userPasswordHasher){
 
        //récupération de l'étudiant dont l'id est passé en paramètre
        $employe = $this->getDoctrine()
            ->getRepository(Employe::class)
            ->find($id);
        $user = $employe->getUser();
        
        
     
        if (!$employe) {
            throw $this->createNotFoundException('Aucune employe trouvé avec le numéro '.$id);
        }
        else
        {
                     $mdp= '123456';
                     $user->setPassword(
                        $userPasswordHasher->hashPassword(
                                $user,
                                $mdp   
                            )
                        );
                     $entityManager = $this->getDoctrine()->getManager();
                     $entityManager->persist($user);
                     $entityManager->flush();
                     return $this->render('employe/consulter.html.twig', ['employe' => $employe,]);
               
               }
            }
     }


