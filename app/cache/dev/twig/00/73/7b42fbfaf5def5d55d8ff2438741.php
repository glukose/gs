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

    // line 120
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 121
        echo "\t";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "</br>
<div id=\"gradient\">
  <div id=\"menu\">
    <ul class=\"sf-menu\">
      <li class=\"current\">
\t<a href=\"#a\">Home</a>
\t<ul>
          <li>
            <a href=\"#aa\">menu item that is quite long</a>
          </li>
          <li class=\"current\">
            <a href=\"#ab\">menu item</a>
            <ul>
              <li class=\"current\"><a href=\"#\">menu item</a></li>
              <li><a href=\"#aba\">menu item</a></li>
              <li><a href=\"#abb\">menu item</a></li>
              <li><a href=\"#abc\">menu item</a></li>
              <li><a href=\"#abd\">menu item</a></li>
            </ul>
          </li>
          <li>
            <a href=\"#\">Approach</a>
            <ul>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
            </ul>
          </li>
          <li>
            <a href=\"#\">menu item</a>
            <ul>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
            </ul>
          </li>
\t</ul>
      </li>
      <li>
\t<a href=\"#\">Approach</a>
      </li>
      <li>
\t<a href=\"#\">Services</a>
\t<ul>
          <li>
            <a href=\"#\">menu item</a>
            <ul>
              <li><a href=\"#\">short</a></li>
              <li><a href=\"#\">short</a></li>
              <li><a href=\"#\">short</a></li>
              <li><a href=\"#\">short</a></li>
              <li><a href=\"#\">short</a></li>
            </ul>
          </li>
          <li>
            <a href=\"#\">menu item</a>
            <ul>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
            </ul>
          </li>
          <li>
            <a href=\"#\">menu item</a>
            <ul>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
            </ul>
          </li>
          <li>
            <a href=\"#\">menu item</a>
            <ul>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
            </ul>
          </li>
          <li>
            <a href=\"#\">menu item</a>
            <ul>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
              <li><a href=\"#\">menu item</a></li>
            </ul>
          </li>
\t</ul>
      </li>
      <li>
\t<a href=\"#\">Staff</a>
      </li>
      <li>
\t<a href=\"#\">Contact</a>
      </li>            
    </ul>
  </div>
</div>


\t";
        // line 120
        echo "\t";
        $this->displayBlock('sdzblog_body', $context, $blocks);
        // line 122
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
