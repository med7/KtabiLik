<?php

namespace Med\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('civilite', 'choice', array(
            'choices' => array('M' => 'Monsieur', 'Mme' => 'Madame', 'Melle'=>'Melle',)
        ))
        ->add('nom')
        ->add('prenom')
        ->add('adresse')
        ->add('code_postal')
       // ->add('avatar')
        ->add('telephone')
        //->add('region')

            ->add('ville','entity', array(
        'class' => 'MedAdBundle:Ville',
        'query_builder' => function($repository) { return $repository->createQueryBuilder('p')->orderBy('p.id', 'ASC'); },
        'property' => 'nom',
    ));
       // ->add('centre_interet');

    }

    public function getName()
    {
        return 'med_user_registration';
    }
}