<?php

namespace App\Form;

use App\Entity\TypeEnseigne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class TypeEnseigneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelle',TextType::class,[
                'attr' =>[
                    'class'=> 'form-control',
                    'maxlength' => 50
                ]
            ])
            ->add('enregistrer', SubmitType::class,[
                'label'=>'Ajouter le type d\'enseigne ',
                'attr'=>[
                    'class'=>'btn btn-theme'
                    
                ]
            ])        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TypeEnseigne::class,
        ]);
    }
}
