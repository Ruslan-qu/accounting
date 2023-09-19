<?php

namespace App\Form;

use App\Entity\Counterparty;
use App\Entity\SearchInvoice;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SearchInvoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('s_data_invoice', DateType::class, [
                'label' => 'Дата нак-ой',
                'widget' => 'single_text',
                'required' => false,
                'attr' => [
                    'style' => 'margin: 0 0 2% 7%'
                ]
            ])
            ->add('po_data_invoice', DateType::class, [
                'label' => false,
                'widget' => 'single_text',
                'required' => false,
                //'attr' => [
                //    'style' => 'margin: 3% 0 0'
                // ]
            ])
            ->add('s_price', NumberType::class, [
                'label' => 'Цена',
                //'scale' => 2,
                'required' => false,
                'attr' => ['style' => 'width: 80px'],
                //'currency' => false,
                //'divisor' => 100,

            ])
            ->add('po_price', NumberType::class, [
                'label' => false,
                'required' => false,
                'attr' => ['style' => 'width: 80px'],
                //'currency' => false,
                //'divisor' => 100,
                //'scale' => 1,
            ])
            ->add('number_document', IntegerType::class, [
                'label' => 'Номер накладной',
                'required' => false,
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('id_counterparty', EntityType::class, [
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
            ->add('id_details', TextType::class, [
                'label' => '№ Детали',
                'required' => false,
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('id_manufacturer', TextType::class, [
                'label' => 'Производитель',
                'required' => false,
                'attr' => ['style' => 'width: 140px']
            ]);
        /*->add('refund', ChoiceType::class, [
                'label' => 'Возвраты',
                'choices'  => [
                    'Возвраты' => 2,
                ],
                'expanded' => true,
                'required' => false,
                //'attr' => ['style' => 'width: 140px']
            ]);*/
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SearchInvoice::class,
        ]);
    }
}
