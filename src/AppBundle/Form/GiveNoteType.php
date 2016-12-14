<?php

// src/AppBundle/Form/NewMenuType.php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class GiveNoteType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
            ->add('rating', ChoiceType::class, array(
                                                        'choices' => array(
                                                            '0 - Horrible'      => '0',
                                                            '1 - Dégeu'         => '1',
                                                            '2 - Pourri'        => '2',
                                                            '3 - Pas bon'       => '3',
                                                            '4 - Très moyen'    => '4',
                                                            '5 - Passable'      => '5',
                                                            '6 - Bof'           => '6',
                                                            '7 - Pas trop mal'  => '7',
                                                            '8 - Bon'           => '8',
                                                            '9 - Délicieux !'   => '9',
                                                            '10 - EXQUIS'       => '10'
                                                                    ),
                                                        'required'    => false,
                                                        'placeholder' => 'Merci de donner une note',
                                                        'empty_data'  => null
                                                        ))
        ->add('commentaire', TextareaType::class, array(
                                                    'label' => 'Commentaire',
                                                    'required' => false))
        ->add('user', TextType::class, array(
                                                      'label' => 'Nom de l\'utilisateur',
                                                      'required' => true ))
        ->add('save', SubmitType::class, array('label' => 'Donner une note'))

    ;
  }
}

?>
