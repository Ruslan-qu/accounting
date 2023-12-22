<?php

namespace App\Form;

use App\Entity\Axles;
use App\Entity\Sides;
use App\Entity\Bodies;
use App\Entity\CarBrands;
use App\Entity\DetailsList;
use App\Entity\Counterparty;
use App\Entity\OriginalRooms;
use App\Entity\PaymentMethod;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SearchSalesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('part_numbers_sales', TextType::class, [
                'label' => '№ Детали',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\da-z]*$/i',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'required' => false,
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('original_number_sales', TextType::class, [
                'label' => '№ Оригинал',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\da-z]*$/i',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'required' => false,
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('manufacturers_sales', TextType::class, [
                'label' => 'Производитель',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\da-z]*[ \-&]?[\da-z]*$/i',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'required' => false,
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('id_part_name_sales', EntityType::class, [
                'label' => 'Название детали',
                'class' => DetailsList::class,
                'choice_label' => 'part_name',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])
            ->add('id_car_brand_sales', EntityType::class, [
                'label' => 'Марка',
                'class' => CarBrands::class,
                'choice_label' => 'car_brand',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])

            ->add('id_side_sales', EntityType::class, [
                'label' => 'Сторона',
                'class' => Sides::class,
                'choice_label' => 'side',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])

            ->add('id_body_sales', EntityType::class, [
                'label' => 'Кузов',
                'class' => Bodies::class,
                'choice_label' => 'body',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])

            ->add('id_axle_sales', EntityType::class, [
                'label' => 'Перед Зад',
                'class' => Axles::class,
                'choice_label' => 'axle',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])
            ->add('s_data_invoice_sales', DateType::class, [
                'label' => 'Дата продажи',
                'widget' => 'single_text',
                'required' => false,
                'attr' => [
                    'style' => 'margin: 0 0 2% 7%'
                ]
            ])
            ->add('po_data_invoice_sales', DateType::class, [
                'label' => false,
                'widget' => 'single_text',
                'required' => false,
                //'attr' => [
                //    'style' => 'margin: 3% 0 0'
                // ]
            ])
            ->add('s_price_sales', IntegerType::class, [
                'label' => 'Цена',
                //'scale' => 2,
                'required' => false,
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\d+$/',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'attr' => ['style' => 'width: 80px'],
                //'currency' => false,
                //'divisor' => 100,

            ])
            ->add('po_price_sales', IntegerType::class, [
                'label' => false,
                'required' => false,
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\d+$/',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'attr' => ['style' => 'width: 80px'],
            ])
            ->add('id_counterparty_sales', EntityType::class, [
                'label' => 'Поставщик',
                'class' => Counterparty::class,
                'choice_label' => 'counterparty',
                // 'expanded' => true,
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]

            ])
            ->add('id_payment_method_sales', EntityType::class, [
                'label' => 'Способ оплаты',
                'class' => PaymentMethod::class,
                'choice_label' => 'method',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])
            ->add('hidden_sales', HiddenType::class)
            ->add('button_sales', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
