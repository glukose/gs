<?php

namespace gs\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
	$repository_article = $em->getRepository('gsBlogBundle:Article');

        return $this->render('gsBlogBundle:Blog:index.html.twig');
    }
}