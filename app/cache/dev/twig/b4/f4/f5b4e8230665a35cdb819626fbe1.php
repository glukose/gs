<?php

/* tutoWelcomeBundle:Contact:contact.html.twig */
class __TwigTemplate_b4f4f5b4e8230665a35cdb819626fbe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<p>Contactez nous

<form action=\"#\" method=\"post\" ";
        // line 6
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "

    ";
        // line 9
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

    <input type=\"submit\" />
</form>


";
    }

    public function getTemplateName()
    {
        return "tutoWelcomeBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
