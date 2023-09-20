<?php

namespace App\Form;

use App\Entity\Pieces;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PiecesFormulaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('taille')
            ->add('Metal')
            ->add('Continent')
            ->add('Pays')
            ->add('Annee')
            ->add('imagePath')
            ->add('Qualite')
            ->add('Appartenance')
            ->add('prixPublic')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pieces::class,
        ]);
    }
}