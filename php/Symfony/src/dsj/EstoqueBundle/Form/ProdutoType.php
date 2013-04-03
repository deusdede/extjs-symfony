<?php

namespace dsj\EstoqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProdutoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('preco')
            ->add('descricao')
            ->add('categoria', 'entity', array('class' => 'dsjEstoqueBundle:Categoria', 'multiple' => false, 'property' => 'nome'))
        ;
    }

    public function getName()
    {
        return 'dsj_estoquebundle_produtotype';
    }
}
