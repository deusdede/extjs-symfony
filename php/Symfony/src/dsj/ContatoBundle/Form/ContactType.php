<?php

namespace dsj\ContatoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('name')
            ->add('phone')
        ;
    }

    public function getName()
    {
        return 'dsj_contatobundle_contacttype';
    }
}
