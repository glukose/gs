<?php

namespace gs\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder        
            ->add('title')
            ->add('content')
            ->add('author');
    }

    public function getName()
    {
        return 'gs_blogbundle_articletype';
    }
}