<?php

namespace App\Form\FormsPartNo;

use App\Entity\EntitiesPartNo\Axles;
use App\Entity\EntitiesPartNo\Sides;
use App\Entity\EntitiesPartNo\Bodies;
use App\Entity\EntitiesPartNo\CarBrands;
use Symfony\Component\Form\AbstractType;
use App\Entity\EntitiesPartNo\DetailsList;
use App\Entity\EntitiesPartNo\Availability;
use App\Entity\EntitiesPartNo\OriginalRooms;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use App\Entity\EntitiesPartNo\IdDetailsManufacturer;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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

            ->add('id_original_number', EntityType::class, [
                'label' => '№ Оригинал',
                'class' => OriginalRooms::class,
                'choice_label' => 'original_number',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
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

            ->add('name_detail', TextareaType::class, [
                'label' => 'Описание детали',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[а-яё\d\s]*$/ui',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'required' => false,
                'attr' => [
                    'rows' => '1',
                    'cols' => '15'
                ]
            ])

            ->add('id_part_name', EntityType::class, [
                'label' => 'Название детали',
                'class' => DetailsList::class,
                'choice_label' => 'part_name',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])

            ->add('id_car_brand', EntityType::class, [
                'label' => 'Марка',
                'class' => CarBrands::class,
                'choice_label' => 'car_brand',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])

            ->add('id_side', EntityType::class, [
                'label' => 'Сторона',
                'class' => Sides::class,
                'choice_label' => 'side',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])

            ->add('id_body', EntityType::class, [
                'label' => 'Кузов',
                'class' => Bodies::class,
                'choice_label' => 'body',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])

            ->add('id_axle', EntityType::class, [
                'label' => 'Перед Зад',
                'class' => Axles::class,
                'choice_label' => 'axle',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])

            ->add('id_in_stock', EntityType::class, [
                'label' => 'Наличие',
                'class' => Availability::class,
                'choice_label' => 'in_stock',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])
            ->add('hidden', HiddenType::class)
            ->add('button', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => IdDetailsManufacturer::class,
        ]);
    }
}
