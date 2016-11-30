<?php

namespace Ens\JobeetBundle\Form;

use blackknight467\StarRatingBundle\Form\RatingType;
use blackknight467\StarRatingBundle\StarRatingBundle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('job_type')->add('company')->add('logo')->add('url')->add('position')->add('location')->add('description')->add('how_to_apply')->add('token')->add('is_public')->add('is_activated')->add('email')->add('rating')->add('expires_at')->add('created_at')->add('updated_at')->add('category')        ;

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ens\JobeetBundle\Entity\Job'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ens_jobeetbundle_job';
    }


}
