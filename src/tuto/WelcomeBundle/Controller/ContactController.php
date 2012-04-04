<?php

namespace tuto\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use tuto\WelcomeBundle\Form\Type\ContactType;

class ContactController extends Controller
{    
    public function contactAction()
    {
	$form = $this->get('form.factory')->create(new ContactType());
	
        return $this->render('tutoWelcomeBundle:Contact:contact.html.twig', array('form' => $form->createView(),));
    }

}