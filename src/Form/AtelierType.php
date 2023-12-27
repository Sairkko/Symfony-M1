<?php

namespace App\Form;

use App\Entity\Atelier;
use App\Entity\Metier;
use App\Entity\Ressource;
use App\Entity\Salle;
use App\Entity\Secteur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AtelierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('intervenant')
            ->add('salle', EntityType::class, [
                'class' => Salle::class,
                'choice_label' => 'nom',
                'placeholder' => '-- Sélectionner une Salle --',
                'placeholder_attr' => [
                    'disabled' => '',
                ],
            ])
            ->add('metier', EntityType::class, [
                'class' => Metier::class,
                'choice_label' => 'nom',
                'placeholder' => '-- Sélectionner un Métier --',
                'placeholder_attr' => [
                    'disabled' => '',
                ],
            ])
            ->add('ressource', EntityType::class, [
                'class' => Ressource::class,
                'placeholder' => '-- Sélectionner une Ressource --',
                'placeholder_attr' => [
                    'disabled' => '',
                ],
            ])
            ->add('secteur', EntityType::class, [
                'class' => Secteur::class,
                'choice_label' => 'nom',
                'placeholder' => '-- Sélectionner un Secteur --',
                'placeholder_attr' => [
                    'disabled' => '',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Atelier::class,
        ]);
    }
}
