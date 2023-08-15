<?php

namespace App\Form;

use App\Entity\IdDetailsManufacturer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PartNoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('part_number', TextType::class, [
                'label' => '№ Детали',
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('manufacturer', TextType::class, [
                'label' => 'Производитель',
                'attr' => ['style' => 'width: 140px']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => IdDetailsManufacturer::class,
        ]);
    }
}
