<?php

namespace App\Form;

use App\Entity\Interlocuteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class InterlocuteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('tel')
            ->add('mail')
            
            ->add('magasin',EntityType::class, array('class' => 'App\Entity\Magasin','choice_label' => 'libelle' )) 
            ->add('enregistrer', SubmitType::class, array('label' => 'ajouter un Interlocuteur'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Interlocuteur::class,
        ]);
    }
}
