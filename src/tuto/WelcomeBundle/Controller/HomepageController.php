<?php

namespace tuto\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use tuto\WelcomeBundle\Entity\Article;

class HomepageController extends Controller
{    
    public function indexAction()
    {
     
      $article = new Article;

      // J'ai raccourci cette partie, car plus rapide à écrire !
      $form = $this->createFormBuilder($article)
        ->add('date',    'date')
        ->add('titre',   'text')
        ->add('contenu', 'textarea')
        ->getForm();

      // On récupère la requête.
      $request = $this->get('request');
      
      
      // On vérifie qu'elle est de type « POST ».
      if( $request->getMethod() == 'POST' )
	{
	  // On fait le lien Requête <-> Formulaire.
	  $form->bindRequest($request);

	  // On vérifie que les valeurs rentrées sont correctes.
	  // (Nous verrons la validation des objets en détail plus bas dans ce chapitre.)
	  if( $form->isValid() )
	    {
	      // On l'enregistre notre objet $article dans la base de données.
	      $em = $this->getDoctrine()->getEntityManager();
	      $em->persist($article);
	      $em->flush();

	    }
	}
      
      // À ce stade :
      // - soit la requête est de type « GET », donc le visiteur vient d'arriver sur la page et veut voir le formulaire ;
      // - soit la requête est de type « POST », mais le formulaire n'est pas valide, donc on l'affiche de nouveau.
   

        return $this->render('tutoWelcomeBundle:Homepage:index.html.twig', array('form' => $form->createView(),));
    }

    public function whoAmIAction($name)
    {
	
	# get the session
    	$session = $this->get('session');

    	# store the user'name in the session
	$session->set('user_name', $name);
	
	return $this->redirect($this->container->get('router')->generate('tutoWelcomeBundle_homepage'));
		
	
    }
}
