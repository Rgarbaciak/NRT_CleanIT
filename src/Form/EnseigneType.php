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
            ->add('libelle')
            ->add('logo')
            ->add('ville')
            ->add('copos')
            ->add('pays')
            ->add('rue')
            ->add('type_enseigne',EntityType::class, array('class' => 'App\Entity\TypeEnseigne','choice_label' => 'libelle' )) 
            ->add('enregistrer', SubmitType::class, array('label' => 'ajouter enseigne'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Enseigne::class,
        ]);
    }
}
