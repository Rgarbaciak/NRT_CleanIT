<?php

namespace App\Form;

use App\Entity\Enseigne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class EnseigneModifierType extends AbstractType
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
            ->add('enregistrer', SubmitType::class, array('label' => 'Modifier enseigne'))
        ;
    }

    public function getParent(){
        return EnseigneType::class;
      }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Enseigne::class,
        ]);
    }
}