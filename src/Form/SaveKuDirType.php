<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SaveKuDirType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('receipt_change_save', IntegerType::class, [
                'label' => 'Смена чека',
            ])
            ->add('receipt_number_save', IntegerType::class, [
                'label' => 'Номер чека',
            ])
            ->add('receipt_date_save', DateType::class, [
                'label' => 'Дата чека',
                'widget' => 'single_text',
            ])
            ->add('coming_save', IntegerType::class, [
                'label' => 'Оплата в кассу',

            ])
            ->add('expenditure_save', NumberType::class, [
                'label' => 'Оплата поставщику',
                'required' => false,
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\d]+[\.,]?[\d]*$/',
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
            ])

            ->add('hidden_save_ku_dir', HiddenType::class)
            ->add('button_save_ku_dir', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
