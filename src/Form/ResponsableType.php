<?php

namespace App\Form;

use App\Entity\Responsable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ResponsableType extends AbstractType
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
            ->add('mail',TextType::class,[
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
            ->add('pays',TextType::class,[
                'data' =>'France' ,
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 50
                ]
            ])
            
            
            ->add('enseigne',EntityType::class, array('class' => 'App\Entity\Enseigne','choice_label' => 'libelle' ))
            ->add('enregistrer', SubmitType::class,[
                'label'=>'Ajouter le responsable',
                'attr'=>[
                    'class'=>'btn btn-theme'
                    
                ]
            ])            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Responsable::class,
        ]);
    }
}
