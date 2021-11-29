<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use App\Repository\ResponsableRepository;
use App\Repository\ClientRepository;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function index(): Response
    {
        return $this->render('search/index.html.twig', [
            'controller_name' => 'SearchController',
        ]);
    }

    public function searchResponsable()
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('responsable'))
            ->add('query', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le nom d\'un responsable'
                ]
            ])
            ->add('recherche', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])

            ->getForm();
        return $this->render('search/searchBar.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/responsable", name="responsable")
     * @param Request $request
     */
    public function responsable(Request $request, ResponsableRepository $repo)
    {
        $query = $request->request->get('form')['query'];
        if($query) {
            $responsable = $repo->findRespByName($query);
        }
        return $this->render('responsable/lister.html.twig', [
            'pResponsable' => $responsable
        ]);
    }




    public function searchClient()
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('client'))
            ->add('query', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le nom d\'un client'
                ]
            ])
            ->add('recherche', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])

            ->getForm();
        return $this->render('search/searchBar.html.twig', [
            'form' => $form->createView()
        ]);
    }

     /**
     * @Route("/client", name="client")
     * @param Request $request
     */
    public function client(Request $request, ClientRepository $client)
    {
        $query = $request->request->get('form')['query'];
        if($query) {
            $clients = $client->findClientByName($query);
        }
        return $this->render('client/lister.html.twig', [
            'pClient' => $clients
        ]);
    }


}
