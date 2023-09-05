<?php

namespace App\Form;

use App\Entity\Invoice;
use App\Entity\Counterparty;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('s_data_invoice', DateType::class, [
                'label' => 'Дата нак-ой',
                'widget' => 'single_text',
                'attr' => [
                    'style' => 'margin: 0 0 0 7%'
                ]
            ])
            ->add('po_data_invoice', DateType::class, [
                'label' => 'Дата нак-ой',
                'widget' => 'single_text',
                'attr' => [
                    'style' => 'margin: 3% 0 0'
                ]
            ])
            ->add('s_price', NumberType::class, [
                'label' => 'Цена',
                'attr' => ['style' => 'width: 80px']
                //'currency' => false,
                //'divisor' => 100,
                //'scale' => 2,
            ])
            ->add('po_price', NumberType::class, [
                'label' => false,
                'attr' => ['style' => 'width: 80px']
                //'currency' => false,
                //'divisor' => 100,
                //'scale' => 2,
            ])
            ->add('number_document', IntegerType::class, [
                'label' => 'Номер накладной',
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('id_counterparty', EntityType::class, [
                'label' => 'Поставщик',
                'class' => Counterparty::class,
                'choice_label' => 'counterparty',
                'expanded' => true,
                'attr' => [
                    // 'style' => 'input #search_id_counterparty_1 { padding: 10px 10px 10px 10px }'
                    // 'counterparty' => ['style' => 'margin: 10px 10px 10px 10px']
                    // 'style' => 'width: 100px ',
                    //'style' => 'padding: 10px 10px 10px 10px'
                    //'style' => 'margin: 0 0 0 10%'
                ],

            ])
            /*->add('id_details', IntegerType::class, [
                'label' => '№ Детали',
                'attr' => ['style' => 'width: 140px'],
            ])
            ->add('id_manufacturer', IntegerType::class, [
                'label' => 'Производитель',
                'attr' => ['style' => 'width: 140px'],
            ])
            ->add('part_numbers', TextType::class, [
                'label' => '№ Детали',
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('manufacturers', TextType::class, [
                'label' => 'Производитель',
                'attr' => ['style' => 'width: 140px']
            ])*/
            ->add('refund', IntegerType::class, [
                'label' => 'Возврат',
                'attr' => ['style' => 'width: 140px']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        //$resolver->setDefaults([
        //    'data_class' => Invoice::class,
        // ]);
    }
}
