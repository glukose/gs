<?php

/* ::layout.html.twig */
class __TwigTemplate_0cf65d8a7b962639af0d8bfde590927f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
  </head>

  <body>
    <div id=\"wrapper_outer\">
      <div id=\"top\">
\t<div id=\"topC\">
          <div id=\"insurance1\"></div>
          <div id=\"insurance2\"></div>
\t</div>
      </div>
      
      <div id=\"header\">
\t<div id=\"headerC\">
          <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gslogo.png"), "html", null, true);
        echo "\" width=\"961\" height=\"138\" >    
\t</div>
      </div>
      
      <div id=\"content\">
\t";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "      </div>
      <div id=\"footer\"> <!-- changer en <footer> -->
        <div id=\"bottombar\"><div id=\"bot\"> <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/newsletter.gif"), "html", null, true);
        echo "\" width=\"966\" height=\"64\"> </div> </div>
        <div id=\"credits\"><div id=\"bot\"> <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/credits.gif"), "html", null, true);
        echo "\" width=\"962\" height=\"53\"> </div>  </div>
      </div>
    </div>
  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "GS";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        echo "GS";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
