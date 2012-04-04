<?php
# src/tuto/WelcomeBundle/Form/Type/ContactType.php

namespace tuto\WelcomeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('email', 'email')
                ->add('subject', 'text')
                ->add('content', 'textarea');
    }

    public function getName()
    {
        return 'Contact';
    }
}
?>