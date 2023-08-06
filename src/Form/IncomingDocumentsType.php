<?php

namespace App\Form;

use App\Entity\Invoice;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
                'attr' => ['style' => 'width: 96px']
            ])
            ->add('data_invoice', DateType::class, [
                'label' => 'Дата нак-ой',
            ])

            ->add('name_detail', TextType::class, [
                'label' => 'Описание детали',
                'attr' => ['style' => 'width: 96px']
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Кол-во',
                'attr' => ['style' => 'width: 96px']
            ])
            ->add('price', IntegerType::class, [
                'label' => 'Цена общая',
                'attr' => ['style' => 'width: 96px']
            ])
            ->add('unit_price', IntegerType::class, [
                'label' => 'Цена шт',
                'attr' => ['style' => 'width: 96px']
            ])
            ->add('quantity_sold', IntegerType::class, [
                'label' => false,
                'attr' => ['style' => 'width: 96px', 'placeholder' => 'шт']
            ])
            ->add('price_sold', IntegerType::class, [
                'label' => false,
                'attr' => ['style' => 'width: 97px', 'placeholder' => 'Цена']
            ]);
        //->add('id_counterparty', TextType::class)
        //->add('id_details', TextType::class)
        //->add('id_manufacturer', TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Invoice::class,
        ]);
    }
}
