<?php

namespace App\Form;

use App\Entity\Invoice;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IncomingDocumentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_invoice', IntegerType::class, [
                'label' => 'Номер накладной',
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('data_invoice', DateType::class, [
                'label' => 'Дата нак-ой',
                'widget' => 'single_text'
            ])

            ->add('name_detail', TextareaType::class, [
                'label' => 'Описание детали',
                'attr' => [
                    'rows' => '1',
                    'cols' => '18'
                ]
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Кол-во',
                'attr' => ['style' => 'width: 50px']
            ])
            ->add('price', IntegerType::class, [
                'label' => 'Цена общая',
                'attr' => ['style' => 'width: 80px']
            ]);
        /*->add('unit_price', IntegerType::class, [
                'label' => 'Цена шт',
                'attr' => ['style' => 'width: 80px']
            ]);*/
        //->add('id_counterparty', IntegerType::class)
        //->add('id_details', IntegerType::class)
        //->add('id_manufacturer', IntegerType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Invoice::class,
        ]);
    }
}
