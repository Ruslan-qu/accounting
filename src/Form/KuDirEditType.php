<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class KuDirEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('receipt_change_edit', IntegerType::class, [
                'label' => 'Смена чека',
                'required' => false,
            ])
            ->add('receipt_number_edit', IntegerType::class, [
                'label' => 'Номер чека',
                'required' => false,
            ])
            ->add('receipt_date_edit', DateType::class, [
                'label' => 'Дата чека',
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('coming_edit', IntegerType::class, [
                'label' => 'Оплата в кассу',
                'required' => false,
            ])
            ->add('expenditure_edit', IntegerType::class, [
                'label' => 'Оплата поставщику',
                'required' => false,
            ])
            ->add('hidden_ku_dir_edit', HiddenType::class)
            ->add('button_ku_dir_edit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
