<?php

/* gsBlogBundle:Blog:index.html.twig */
class __TwigTemplate_00737b42fbfaf5def5d55d8ff2438741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Insurance Blog
";
    }

    // line 12
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 13
        echo "\t";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "


\t";
        // line 12
        echo "\t";
        $this->displayBlock('sdzblog_body', $context, $blocks);
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "gsBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
