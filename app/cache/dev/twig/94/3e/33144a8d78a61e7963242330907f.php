<?php

/* gsBlogBundle:Default:index.html.twig */
class __TwigTemplate_943e33144a8d78a61e7963242330907f extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<body>
Hello toi ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "gsBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
