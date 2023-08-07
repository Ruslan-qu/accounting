<?php

namespace App\Form;

use App\Entity\Counterparty;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class CounterpartyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('counterparty', TextType::class, [
                'label' => 'Поставщик',
                'attr' => ['style' => 'width: 140px']
            ])
            ->add('mail_counterparty', EmailType::class, [
                'label' => 'Email',
                'attr' => ['style' => 'width: 140px']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Counterparty::class,
        ]);
    }
}
