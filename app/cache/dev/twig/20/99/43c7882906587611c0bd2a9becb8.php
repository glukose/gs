<?php

/* tutoWelcomeBundle::layout.html.twig */
class __TwigTemplate_209943c7882906587611c0bd2a9becb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <title>Tutoriel Symfony2 : ";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <div id=\"container\">
        <header>
\t  <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tutoWelcomeBundle_homepage"), "html", null, true);
        echo "\" title=\"Retour à l'accueil\">Tutoriel Symfony2</a>
\t  <p>
\t    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 16
            echo "              ";
            if ($this->getContext($context, "flash")) {
                // line 17
                echo "                ";
                echo twig_escape_filter($this->env, $this->getContext($context, "flash"), "html", null, true);
                echo "
              ";
            }
            // line 19
            echo "\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "\t  </p>
\t</header>
            <div id=\"content\">
                ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "            </div>
            <footer>
            </footer>
        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tutowelcome/css/welcome.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "tutoWelcomeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
