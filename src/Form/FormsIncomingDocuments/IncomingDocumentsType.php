<?php

namespace App\Form\FormsIncomingDocuments;

use Symfony\Component\Form\AbstractType;
use App\Entity\EntitiesRefund\RefundActivity;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\EntitiesCounterparty\Counterparty;
use App\Entity\EntitiesIncomingDocuments\Invoice;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\EntitiesIncomingDocuments\PaymentMethod;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class IncomingDocumentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('number_document', IntegerType::class, [
                'label' => 'Номер накладной',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\d+$/',
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('data_invoice', DateType::class, [
                'label' => 'Дата нак-ой',
                'widget' => 'single_text'
            ])


            ->add('quantity', IntegerType::class, [
                'label' => 'Кол-во',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\d+$/',
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'attr' => ['style' => 'width: 50px']
            ])
            ->add('price', NumberType::class, [
                'label' => 'Цена общая',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\d]+[\.,]?[\d]*$/',
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'attr' => ['style' => 'width: 80px']
            ])

            ->add('id_counterparty', EntityType::class, [
                'label' => 'Поставщик',
                'class' => Counterparty::class,
                'choice_label' => 'counterparty',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])

            ->add('id_payment_method', EntityType::class, [
                'label' => 'Способ оплаты',
                'class' => PaymentMethod::class,
                'choice_label' => 'method',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ])
            ->add('id_refund_activity', EntityType::class, [
                'label' => 'Активность возврата',
                'class' => RefundActivity::class,
                'choice_label' => 'activity',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ]);
        /*->add('id_details', IntegerType::class, [
                'label' => '№ Детали',
                'attr' => ['style' => 'width: 140px'],
            ])
         ->add('id_manufacturer', IntegerType::class, [
                'label' => 'Производитель',
                'attr' => ['style' => 'width: 140px'],
            ]);*/
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Invoice::class,
        ]);
    }
}
