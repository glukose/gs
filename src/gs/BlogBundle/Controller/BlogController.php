<?php

namespace gs\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('gsBlogBundle:Blog:index.html.twig');
    }
}