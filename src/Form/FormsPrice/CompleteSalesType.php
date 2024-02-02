<?php

namespace App\Form\FormsPrice;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\EntitiesIncomingDocuments\PaymentMethod;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class CompleteSalesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_payment_method_complete_sales', EntityType::class, [
                'label' => 'Способ оплаты',
                'class' => PaymentMethod::class,
                'choice_label' => 'method',
            ])
            ->add('receipt_change_complete_sales', IntegerType::class, [
                'label' => 'Смена чека',
                'required' => false,
            ])
            ->add('receipt_number_complete_sales', IntegerType::class, [
                'label' => 'Номер чека',
                'required' => false,
            ])
            ->add('receipt_date_complete_sales', DateType::class, [
                'label' => 'Дата чека',
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('hidden_complete_sales', HiddenType::class)
            ->add('button_complete_sales', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
