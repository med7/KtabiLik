<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mohammed
 * Date: 13/01/14
 * Time: 19:32
 * To change this template use File | Settings | File Templates.
 */
namespace Med\AdBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;



class SearchFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','text',array(
                'required'  => false,
            ))
            ->add('Ville','entity', array(
                'class' => 'MedAdBundle:Ville',
                'query_builder' => function($repository) { return $repository->createQueryBuilder('p')->orderBy('p.id', 'ASC'); },
                'property' => 'nom',
                'required'  => false,
                'empty_value' => '-- Toutes les villes --',
            ))
            ->add('Categorie','entity', array(
                'class' => 'MedAdBundle:Categorie',
                'query_builder' => function($repository) { return $repository->createQueryBuilder('p')->orderBy('p.id', 'ASC'); },
                'property' => 'nom',
                'required'  => false,
                'empty_value' => '-- Toutes les catégories --',
            ));

    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'med_adbundle_search';
    }
}