<?php

namespace gs\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use gs\BlogBundle\Entity\Article;
use Symfony\Component\Form\FormBuilder;

use gs\BlogBundle\Form\ArticleHandler;
use gs\BlogBundle\Form\ArticleType;

class BlogController extends Controller
{
    
    public function indexAction()
    {
            
      $em = $this->getDoctrine()->getEntityManager();
      $repository_article = $em->getRepository('gsBlogBundle:Article');
	
      $article = new Article;
      $article->setTitle('Mon dernier weekend sur le bord de la mer');
      $article->setContent("C'était vraiment super et on s'est bien amusé.");
      $article->setAuthor('Viv Bibby');

      //$em->persist($article);
      //$em->flush();

      return $this->render('gsBlogBundle:Blog:index.html.twig');
    }

    public function addsArticleAction(){
      $id='6';
      $em = $this->getDoctrine()->getEntityManager();
      if( ! $article = $em->getRepository('gs\BlogBundle\Entity\Article')->find($id) )
        {
	  throw $this->createNotFoundException('Article[id='.$id.'] inexistant');
        }
      // On passe l'$article récupéré au formulaire
      $form = $this->createForm($article);

      /* $article = $this->getDoctrine()
	->getRepository('gs\BlogBundle\Entity\Article')
	->find(6);

      $formBuilder = $this->createFormBuilder($article);

      $form = $formBuilder->getForm();

      /*$article = new Article;
      $formBuilder = $this->createFormBuilder($article);

      $formBuilder
	->add('title', 'text')
	->add('content', 'textarea')
	->add('author', 'text');

	$form = $formBuilder->getForm();

     
      $request = $this->get('request');
 
      if( $request->getMethod() == 'POST' )
	{      
	  $form->bindRequest($request);
      
	  if( $form->isValid() )
	    {
	      $em = $this->getDoctrine()->getEntityManager();
	      $em->persist($article);
	      $em->flush();

	      // On redirige vers la page d'accueil, par exemple.
	      return $this->redirect($this->generateUrl('gsBlogBundle_homepage'));
	    }
	}

      */
      return $this->render('gsBlogBundle:Blog:add.html.twig', array('form' => $form->createView(),));
      
      }

    public function addArticleAction()
    {
        $id='6';
        $em = $this->getDoctrine()->getEntityManager();

        // On vérifie que l'article d'id $id existe bien, sinon, erreur 404.
        if( ! $article = $em->getRepository('gs\BlogBundle\Entity\Article')->find($id) )
        {
            throw $this->createNotFoundException('Article[id='.$id.'] inexistant');
        }

        // On passe l'$article récupéré au formulaire
        $form        = $this->createForm(new ArticleType, $article);
        $formHandler = new ArticleHandler($form, $this->get('request'), $em);

        if($formHandler->process())
        {
            return $this->redirect( $this->generateUrl('gsBlogBundle_homepage', array('id' => $article->getId())) );
        }

        return $this->render('gsBlogBundle:Blog:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}