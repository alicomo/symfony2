<?php

namespace Acme\StoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('price')
            ->add('description')
        ;
    }

    public function getName()
    {
        return 'acme_storebundle_producttype';
    }
}
