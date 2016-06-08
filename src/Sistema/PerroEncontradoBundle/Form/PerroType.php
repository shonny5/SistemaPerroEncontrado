<?php

namespace Sistema\PerroEncontradoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

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
            ->add('fechaIngreso', 'datetime', array(
                        'placeholder' => 'Ingrese fecha de ingreso del perro.',
                )
            )
            ->add('fechaSalida', 'datetime' array(
                        'placeholder' => 'Ingrese fecha de adopcion del perro.'
                )
            )
            ->add('usuario_de_rescate', 'entity', array(
                    'class'        => 'SistemaPerroEncontradoBundle:Usuario'
                    'query_builer' => function(EntityRepository $er){
                        return $er->CreateQueryBuilder('u')
                                  ->orderBy('u.nombre', 'ASC')
                    },
                )
            )
            ->add('propietario', 'entity', array(
                    'class'        => 'SistemaPerroEncontradoBundle:Propietario',
                    'query_builer' => function(EntityRepository $er){
                        return $er->CreateQueryBuilder('p')
                                  ->orderBy('p.nombre', 'ASC')
                    },
                )
            )
            ->add('razas', 'entity', array(
                    'class'         => 'SistemaPerroEncontradoBundle:Raza'
                    'query_builder' => function(EntityRepository $er){
                        return $er->CreateQueryBuilder('r')
                                  ->orderBy('r.nombre', 'ASC')
                    },
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
