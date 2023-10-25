<?php

namespace App\Form;

use App\Entity\IdDetailsManufacturer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PartNoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('part_numbers', TextType::class, [
                'label' => '№ Детали',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\da-z]*$/i',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('manufacturers', TextType::class, [
                'label' => 'Производитель',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\da-z]*[ \-&]?[\da-z]*$/i',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'attr' => ['style' => 'width: 140px']
            ])

            ->add('name_details', TextareaType::class, [
                'label' => 'Описание детали',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[а-яё\d\s]*$/ui',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'attr' => [
                    'rows' => '1',
                    'cols' => '18'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => IdDetailsManufacturer::class,
        ]);
    }
}
