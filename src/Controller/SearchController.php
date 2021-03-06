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
use App\Repository\MagasinRepository;
use App\Repository\InterlocuteurRepository;
use App\Repository\EnseigneRepository;
use App\Entity\Enseigne;

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




    public function searchMagasin()
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('magasin'))
            ->add('query', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le nom d\'un magasin'
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
     * @Route("/magasin", name="magasin")
     * @param Request $request
     */
    public function magasin(Request $request, MagasinRepository $magasin)
    {
        $query = $request->request->get('form')['query'];
        
        if($query) {
            $magasins = $magasin->findByMagasinpByName($query);
        }
        return $this->render('magasin/lister.html.twig', [
            'pMagasin' => $magasins
        ]);
    }


    public function searchInterlocuteur()
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('interlocuteur'))
            ->add('query', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le nom d\'un interlocuteur'
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
     * @Route("/interlocuteur", name="interlocuteur")
     * @param Request $request
     */
    public function interlocuteur(Request $request, InterlocuteurRepository $interlocuteur)
    {
        $query = $request->request->get('form')['query'];
        
        if($query) {
            $interlocuteurs = $interlocuteur->findByInterlocuteurByName($query);
        }
        return $this->render('interlocuteur/lister.html.twig', [
            'pInterlocuteur' => $interlocuteurs
        ]);
    }

    public function searchEnseigne()
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('enseigne'))
            ->add('query', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le nom d\'une enseigne'
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
     * @Route("/enseigne", name="enseigne")
     * @param Request $request
     */
    public function enseigne(Request $request, EnseigneRepository $enseigne)
    {
        $query = $request->request->get('form')['query'];
        
        if($query) {
            $enseigne = $enseigne->findByEnseigneByName($query);
        }
        return $this->render('enseigne/lister.html.twig', [
            'pEnseigne' => $enseigne
        ]);
    }


    public function searchMagasinInEnseigne(int $id)
    {
         $id;
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('enseigne'))
            ->add('query', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le nom d\'un magasin'
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
     * @Route("/enseigne/consulter/{id}", name="enseigneConsulter")
     * @param Request $request
     */
    public function magasinInEnseigne(Request $request, EnseigneRepository $enseigne)
    {
        $query = $request->request->get('form')['query'];
        $id = $request ->request->get('id');
        
        if($query and $id) {
            $magasins = $enseigne->findByMagasinpByNameByIdEnseigne($query,$id);
            $enseigne = $this->getDoctrine()
            ->getRepository(Enseigne::class)
            ->find($id);
        }
        return $this->render('enseigne/consulter.html.twig', [
            'pMagasin' => $magasins,
            'enseigne'=>$enseigne
            
        ]);
    }

}
