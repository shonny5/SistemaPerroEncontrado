<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sistema\PerroUserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text', array(
                'label' => 'Usuario', 
                'translation_domain' => 'FOSUserBundle',
                'required' => false,
                'attr' => array(
                        "class" => "form-control input-sm",
                        'placeholder'=>"Usuario"
                    ),
                )
            )
            ->add('email', 'email', array(
                'label' => 'Email', 
                'translation_domain' => 'FOSUserBundle',
                'required' => false,
                'attr' => array(
                        "class" => "form-control input-sm",
                        'placeholder'=>"Correo electronico"
                    ),
                )
            )
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array(
                    'label' => false,
                    'attr' => array(
                        "class" => "form-control input-sm",
                        'placeholder' => 'Ingrese contraseña'
                    )
                ),
                'second_options' => array(
                    'label' => false,
                    'attr' => array(
                        "class" => "form-control input-sm",
                        'placeholder' => 'Re ingrese contraseña'
                    )
                ),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('nombre', 'text', array(
                    'label' => false,
                    'required' => false,
                    'attr' => array(
                        "class" => "form-control input-sm",
                        'placeholder' => 'Nombre'
                    )                    
                )
            )
            ->add('apellido', 'text', array(
                    'label' => false,
                    'required' => false,
                    'attr' => array(
                        "class" => "form-control input-sm",
                        'placeholder' => 'Apellido'
                    )                    
                )
            )
            ->add('direccion', 'text', array(
                    'label' => false,
                    'required' => false,
                    'attr' => array(
                        "class" => "form-control input-sm",
                        'placeholder' => 'Direccion'
                    )                    
                )
            )
            ->add('telefono', 'text', array(
                    'label' => false,
                    'required' => false,
                    'attr' => array(
                        "class" => "form-control input-sm",
                        'placeholder' => 'Tel.'
                    )                    
                )
            )
        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }    


    public function getName()
    {
        return 'perro_user_registration';
    }
}
