<?php

namespace App\Form;

use App\Entity\Candidate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Skill')
            ->add('Date_of_entry')
            ->add('Candidate_Name')
            ->add('Mobile')
            ->add('Email')
            ->add('Total_Exp')
            ->add('Calculate_Total_Exp')
            ->add('Relevant_Exp')
            ->add('Current_Company')
            ->add('Current_CTC')
            ->add('Expected_CTC')
            ->add('Current_Location')
            ->add('Expected_Location')
            ->add('Notice_Period')
            ->add('Career_Join_Date')
            ->add('reminder')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidate::class,
        ]);
    }
}
