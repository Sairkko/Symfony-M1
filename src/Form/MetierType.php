<?php

namespace App\Form;

use App\Entity\Activite;
use App\Entity\Atelier;
use App\Entity\Competence;
use App\Entity\Metier;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MetierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('atelier', EntityType::class, [
                'class' => Atelier::class,
'choice_label' => 'id',
            ])
            ->add('competence', EntityType::class, [
                'class' => Competence::class,
'choice_label' => 'id',
'multiple' => true,
            ])
            ->add('activite', EntityType::class, [
                'class' => Activite::class,
'choice_label' => 'id',
'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Metier::class,
        ]);
    }
}
