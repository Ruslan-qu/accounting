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
            ->add('id_invoice', IntegerType::class)
            ->add('data_invoice', DateType::class)
            ->add('name_detail', TextType::class)
            ->add('quantity', DateType::class)
            ->add('price', IntegerType::class)
            ->add('unit_price', IntegerType::class)
            ->add('quantity_sold', IntegerType::class)
            ->add('price_sold', IntegerType::class);
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
