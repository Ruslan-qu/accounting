<?php

namespace App\Form;

use App\Entity\Invoice;
use App\Entity\Counterparty;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class IncomingDocumentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('number_document', IntegerType::class, [
                'label' => 'Номер накладной',
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('data_invoice', DateType::class, [
                'label' => 'Дата нак-ой',
                'widget' => 'single_text'
            ])

            ->add('name_detail', TextareaType::class, [
                'label' => 'Описание детали',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[а-яё\d\s]*$/ui',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'attr' => [
                    'rows' => '1',
                    'cols' => '18'
                ]
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Кол-во',
                'attr' => ['style' => 'width: 50px']
            ])
            ->add('price', NumberType::class, [
                'label' => 'Цена общая',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\d]+[\.,]?[\d]*$/',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ],
                'attr' => ['style' => 'width: 80px']
                //'currency' => false,
                //'divisor' => 100,
                //'scale' => 2,
            ])
            ->add('id_counterparty', EntityType::class, [
                'label' => 'Поставщик',
                'class' => Counterparty::class,
                'choice_label' => 'counterparty',
                'required' => false,
                'attr' => [
                    'style' => 'width: 100px ',
                    'style' => 'padding: 1px 3px 1px 5px'
                ]
            ]);
        /*->add('id_details', IntegerType::class, [
                'label' => '№ Детали',
                'attr' => ['style' => 'width: 140px'],
            ])
            ->add('id_manufacturer', IntegerType::class, [
                'label' => 'Производитель',
                'attr' => ['style' => 'width: 140px'],
            ]);*/
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Invoice::class,
        ]);
    }
}
