<?php

namespace App\Form\FormsKuDir;

use App\Entity\PaymentMethod;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class KuDirType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('receipt_change', IntegerType::class, [
                'label' => 'Смена чека',
                'required' => false,
            ])
            ->add('receipt_number', IntegerType::class, [
                'label' => 'Номер чека',
                'required' => false,
            ])
            ->add('receipt_from_date', DateType::class, [
                'label' => 'Дата чека',
                'widget' => 'single_text',
                'required' => false,
                'attr' => [
                    'style' => 'margin: 0 0 2% 7%'
                ]
            ])
            ->add('receipt_by_date', DateType::class, [
                'label' => false,
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('hidden_ku_dir', HiddenType::class)
            ->add('button_ku_dir', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
