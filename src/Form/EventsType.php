<?php

namespace App\Form;

use App\Entity\Events;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('eventName')
            ->add('eventTimeDate')
            ->add('eventDescription')
            ->add('eventImg')
            ->add('eventCapacity')
            ->add('eventEmail')
            ->add('eventPhoneNumber')
            ->add('eventAdress')
            ->add('eventUrl')
            ->add('eventType', ChoiceType::class, [
                'choices' => [
                    'Kultur' => 'Kultur',
                    'Musik' => 'Musik',
                    'Theater' => 'Theater',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}
