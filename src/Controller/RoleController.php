<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Role;
use App\Form\RoleType;
use Symfony\Component\HttpFoundation\Request;

class RoleController extends AbstractController
{
    #[Route('/role', name: 'role')]
    public function index(): Response
    {
        return $this->render('role/index.html.twig', [
            'controller_name' => 'RoleController',
        ]);
    }
    public function ajouterRole(Request $request){
        $role = new Role();
        $form = $this->createForm(RoleType::class, $role);
        $form->handleRequest($request);{}
    
        if ($form->isSubmitted() && $form->isValid()) {
    
                $role = $form->getData();
    
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($role);
                $entityManager->flush();
    
            return $this->redirect('lister');;


        }
        else
            {
                return $this->render('role/ajouter.html.twig', array('form' => $form->createView(),));
        }
    }
    public function listerRole(){
        $repository = $this->getDoctrine()->getRepository(Role::class);
        $role = $repository->findAll();
        return $this->render('role/lister.html.twig', [
            'pRole' => $role,]);	
    }
}
