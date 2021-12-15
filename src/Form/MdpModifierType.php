<?php

namespace App\Form;

use App\Entity\Employe;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class MdpModifierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('mdpBefore',PasswordType::class,[
            'label'=>'Ancien mot de passe',
            'mapped' => false,
            'attr' =>[
                'class'=> 'form-control',
                'maxlength' => 50
            ]
        ])
        ->add('mdpNext',PasswordType::class,[
            'label'=>'Nouveau mot de passe',
            'mapped' => false,
            'attr' =>[
                'class'=> 'form-control',
                'maxlength' => 50
            ]
        ])
        
           
        ->add('enregistrer', SubmitType::class,[
            'label'=>'Modifier le profil',
            'attr'=>[
                'class'=>'btn btn-theme'
                
            ]
        ])        ;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employe::class,
        ]);
    }
}
