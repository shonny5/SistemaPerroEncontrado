<?php

namespace Sistema\PerroEncontradoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PerroType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ubicacion')
            ->add('estado')
            ->add('color')
            ->add('fechaIngreso')
            ->add('fechaSalida')
            ->add('usuario_de_rescate')
            ->add('propietario')
            ->add('razas')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\PerroEncontradoBundle\Entity\Perro'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_perroencontradobundle_perro';
    }
}
