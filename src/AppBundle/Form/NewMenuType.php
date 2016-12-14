<?php

// src/AppBundle/Form/NewMenuType.php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class NewMenuType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
        ->add('name', TextType::class, array('label' => 'Nom du menu '))
        ->add('description', TextareaType::class, array(
                                                      'label' => 'Description du menu',
                                                      'required' => false))
        ->add('ingredients', TextType::class, array(
                                                      'label' => 'Ingrédients du menu',
                                                      'required' => false ))
        ->add('save', SubmitType::class, array('label' => 'Créer le menu'))

    ;
  }
}

?>
