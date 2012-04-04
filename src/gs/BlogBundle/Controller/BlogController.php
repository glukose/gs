<?php

namespace gs\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('gsBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}