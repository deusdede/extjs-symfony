<?php

namespace dsj\EstoqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CategoriaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nome')
        ;
    }

    public function getName()
    {
        return 'dsj_estoquebundle_categoriatype';
    }
}
