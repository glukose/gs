<?php

/* tutoWelcomeBundle:Default:index.html.twig */
class __TwigTemplate_0bc8b74dc6be57ebe5aba31f1397f4ff extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "tutoWelcomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
