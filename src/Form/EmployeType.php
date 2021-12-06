<?php

namespace App\Form;

use App\Entity\Employe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EmployeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        
        $builder
        
            ->add('nom',TextType::class,[
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 50
                ]
            ])
            ->add('prenom',TextType::class,[
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 50
                ]
            ])
            ->add('pays',TextType::class,[
                'data' =>'France' ,
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 50
                ]
            ])
            ->add('tel',TextType::class,[
               
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 10
                    
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
            ->add('rue',TextType::class,[
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 50
                ]
            ])
            ->add('mail',TextType::class,[
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 50
                ]
            ])
            ->add('enregistrer', SubmitType::class,[
                'label'=>'Ajouter l\'employé',
                'attr'=>[
                    'class'=>'btn btn-theme'
                    
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employe::class,
        ]);
    }
}
