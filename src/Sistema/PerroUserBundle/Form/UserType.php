<?php

namespace Sistema\PerroUserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text', array(
                    'label' => "Ingrese nombre"
                    'required' => false,
                )
            )
            ->add('apellido', 'text', array(
                    'required' => false,
                )
            )
            ->add('direccion', 'text', array(
                    'required' => false,
                )
            )
            ->add('telefono', 'text', array(
                    'required' => false,
                )
            )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\PerroUserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_perrouserbundle_user';
    }
}
