<?php

namespace App\Form;

use App\Entity\Enseigne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class EnseigneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelle',TextType::class,[
                'label'=>'Nom',
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 50
                ]
            ])
            ->add('siret',TextType::class,[
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 9
                ]
            ]) 
            ->add('logo',TextType::class,[
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 50
                ]
            ])
            ->add('rue',TextType::class,[
                'label'=>'Adresse',
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 50
                ]
            ])
            ->add('copos',TextType::class,[
                'label'=>'Code Postal',
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 5
                ]
            ])
            ->add('ville',TextType::class,[
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 50
                ]
            ])
            
            ->add('pays',TextType::class,[
                'data' =>'France' ,
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 50,
                    
                ]
            ])
                        
            ->add('type_enseigne',EntityType::class, array('class' => 'App\Entity\TypeEnseigne','choice_label' => 'libelle' )) 
            ->add('enregistrer', SubmitType::class,[
                'label'=>'Ajouter l\'enseigne',
                'attr'=>[
                    'class'=>'btn btn-theme'
                    
                ]
            ])        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Enseigne::class,
        ]);
    }
}
