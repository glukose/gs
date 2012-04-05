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
            'javascripts' => array($this, 'block_javascripts'),
            'jquery' => array($this, 'block_jquery'),
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
        echo " </title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "     ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo " 
     <script>
       \$(function(){
       ";
        // line 21
        $this->displayBlock('jquery', $context, $blocks);
        // line 23
        echo "       jQuery('ul.sf-menu').superfish();
\t\t});
       
     </script>  

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
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/gslogo.png"), "html", null, true);
        echo "\" width=\"961\" height=\"138\" >    
\t</div>
      </div>
      
      <div id=\"content\">
\t";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "      </div>
      <div id=\"footer\"> <!-- changer en <footer> -->
        <div id=\"bottombar\"><div id=\"bot\"> <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/newsletter.gif"), "html", null, true);
        echo "\" width=\"966\" height=\"64\"> </div> </div>
        <div id=\"credits\"><div id=\"bot\"> <img src=\"";
        // line 50
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/menu.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link href=\"http://fonts.googleapis.com/css?family=Rokkitt:400,700\" rel=\"stylesheet\" type=\"text/css\">

    ";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\"></script>
    <script src=\"http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fish/hoverIntent.js"), "html", null, true);
        echo "\" ></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fish/superfish.js"), "html", null, true);
        echo "\" ></script>
     <!-- <script type=\"text/javascript\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/style.css"), "html", null, true);
        echo "\"></script>-->
    ";
    }

    // line 21
    public function block_jquery($context, array $blocks = array())
    {
        // line 22
        echo "       ";
    }

    // line 46
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
