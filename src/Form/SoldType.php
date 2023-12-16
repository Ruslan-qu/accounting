<?php

namespace App\Form;

use App\Entity\Sold;
use DateTimeImmutable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SoldType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantity_sold', IntegerType::class, [
                'label' => 'Кол-во',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\d+$/',
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                    new NotBlank([
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
            ])
            ->add('price_sold', NumberType::class, [
                'label' => 'Цена',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\d]+[\.,]?[\d]*$/',
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                    new NotBlank([
                        'message' => 'Форма содержит недопустимые символы'
                    ])
                ]
            ])
            ->add('date_sold', DateType::class, [
                'label' => 'Дата продажи',
                'widget' => 'single_text'
            ])
            ->add('id_invoice', IntegerType::class)
            ->add('hidden_sold', HiddenType::class)
            ->add('button', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sold::class,
        ]);
    }
}
