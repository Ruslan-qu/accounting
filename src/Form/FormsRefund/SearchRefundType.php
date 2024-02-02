<?php

namespace App\Form\FormsRefund;

use App\Entity\PaymentMethod;
use Symfony\Component\Form\AbstractType;
use App\Entity\EntitiesRefund\RefundActivity;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\EntitiesCounterparty\Counterparty;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SearchRefundType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('s_data_invoice_refund', DateType::class, [
                'label' => 'Дата нак-ой',
                'widget' => 'single_text',
                'required' => false,
                'attr' => [
                    'style' => 'margin: 0 0 2% 7%'
                ]
            ])
            ->add('po_data_invoice_refund', DateType::class, [
                'label' => false,
                'widget' => 'single_text',
                'required' => false,
                //'attr' => [
                //    'style' => 'margin: 3% 0 0'
                // ]
            ])
            ->add('s_price_refund', IntegerType::class, [
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
            ->add('po_price_refund', IntegerType::class, [
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
                //'currency' => false,
                //'divisor' => 100,
                //'scale' => 1,
            ])
            ->add('search_number_document_refund', IntegerType::class, [
                'label' => 'Номер накладной',
                'required' => false,
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\d+$/',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('search_id_counterparty_refund', EntityType::class, [
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
            ->add('search_id_details_refund', TextType::class, [
                'label' => '№ Детали',
                'required' => false,
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\da-z]*$/i',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'attr' => ['style' => 'width: 140px']
            ])

            ->add('search_id_manufacturer_refund', TextType::class, [
                'label' => 'Производитель',
                'required' => false,
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\da-z]*[ \-&]?[\da-z]*$/i',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('data_refund', DateType::class, [
                'label' => 'Дата возврата',
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('refund_activity_refund', EntityType::class, [
                'label' => 'Состояния',
                'class' => RefundActivity::class,
                'choice_label' => 'activity',
                // 'expanded' => true,
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])

            ->add('button', SubmitType::class);;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
