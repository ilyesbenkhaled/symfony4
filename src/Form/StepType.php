<?php

namespace App\Form;

use App\Entity\Step;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StepType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amount')
            ->add('first_name')
            ->add('name')
            ->add('statut')
            ->add('company_name')
            ->add('adress_a')
            ->add('adress_b')
            ->add('zipe_code_a')
            ->add('city_a')
            ->add('creditor')
            ->add('adress_1')
            ->add('adress_2')
            ->add('zip_code_or')
            ->add('city_or');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Step::class,
        ]);
    }
}
