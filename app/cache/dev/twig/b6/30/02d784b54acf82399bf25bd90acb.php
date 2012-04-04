<?php

/* tutoWelcomeBundle:Homepage:index.html.twig */
class __TwigTemplate_b63002d784b54acf82399bf25bd90acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "tutoWelcomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Homepage";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<p>Vous êtes en train de lire la première page générée avec Symfony2, la homepage.
<br><br>
Pour mieux vous connaitre, informez-nous de votre pseudo en tapant cette url dans votre barre d'adresse et en y ajoutant votre pseudo :
<form method=\"post\" ";
        // line 9
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
      ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
      <input type=\"submit\" />
</form>
</p>



";
    }

    public function getTemplateName()
    {
        return "tutoWelcomeBundle:Homepage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
