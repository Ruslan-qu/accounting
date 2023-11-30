<?php

namespace App\Form;

use App\Entity\Counterparty;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CounterpartySearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Форма search
            ->add('counterparty_search', EntityType::class, [
                'label' => 'Поставщик',
                'class' => Counterparty::class,
                'choice_label' => 'counterparty',
                'required' => false,
            ])
            ->add('mail_counterparty_search', EntityType::class, [
                'label' => 'Email',
                'class' => Counterparty::class,
                'choice_label' => 'mail_counterparty',
                'required' => false,
            ])
            ->add('button', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
