<?php

namespace App\Form\FormsCounterparty;

use App\Entity\Counterparty;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CounterpartyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Форма sales
            ->add('counterparty', TextType::class, [
                'label' => 'Поставщик',
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[\da-z]*$/i',
                        //'match' => false,
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                    new NotBlank(
                        message: 'Форма содержит недопустимые символы',
                    ),
                ]
            ])
            ->add('mail_counterparty', EmailType::class, [
                'label' => 'Email',
                'constraints' => [
                    new Email([
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                    new NotBlank([
                        'message' => 'Форма содержит недопустимые символы'
                    ]),
                ]
            ])
            ->add('hidden', HiddenType::class)
            ->add('button', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Counterparty::class,
        ]);
    }
}
