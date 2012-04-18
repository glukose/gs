<?php

/* gsBlogBundle:Blog:add.html.twig */
class __TwigTemplate_a70ee977df9b917b060bbe5b2c9ae61c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'jquery' => array($this, 'block_jquery'),
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        echo "\t ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
         <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsblog/js/slides.min.jquery.js"), "html", null, true);
        echo "\" ></script>
";
    }

    // line 12
    public function block_jquery($context, array $blocks = array())
    {
        // line 13
        echo "   \$('#slides').slides({
      preload: true,
      preloadImage: 'img/loading.gif',
      play: 5000,
      pause: 2500,
      hoverPause: true
});
";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "\t ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
         <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsblog/css/styleIndex.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 191
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 192
        echo "\t";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "</br>
<div id=\"gradient\">
  <div id=\"menu\">
    <ul class=\"sf-menu\">
      <li class=\"current\">
\t<a href=\"#a\">Home</a>
\t<ul>
          <li><a href=\"#aa\">Our company</a></li>
          <li class=\"current\"><a href=\"#ab\">menu item</a><ul>
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

<div id=\"example\">
  <div id=\"slides\">
    <div class=\"slides_container\">
      <a href=\"http://www.flickr.com/photos/jliba/4665625073/\" title=\"145.365 - Happy Bokeh Thursday! | Flickr - Photo Sharing!\" target=\"_blank\"><img src=\"http://slidesjs.com/examples/standard/img/slide-1.jpg\" width=\"570\" height=\"270\" alt=\"Slide 1\"></a>
      <a href=\"http://www.flickr.com/photos/stephangeyer/3020487807/\" title=\"Taxi | Flickr - Photo Sharing!\" target=\"_blank\"><img src=\"http://slidesjs.com/examples/standard/img/slide-2.jpg\" width=\"570\" height=\"270\" alt=\"Slide 2\"></a>
      <a href=\"http://www.flickr.com/photos/childofwar/2984345060/\" title=\"Happy Bokeh raining Day | Flickr - Photo Sharing!\" target=\"_blank\"><img src=\"http://slidesjs.com/examples/standard/img/slide-3.jpg\" width=\"570\" height=\"270\" alt=\"Slide 3\"></a>
      <a href=\"http://www.flickr.com/photos/b-tal/117037943/\" title=\"We Eat Light | Flickr - Photo Sharing!\" target=\"_blank\"><img src=\"http://slidesjs.com/examples/standard/img/slide-4.jpg\" width=\"570\" height=\"270\" alt=\"Slide 4\"></a>
      <a href=\"http://www.flickr.com/photos/bu7amd/3447416780/\" title=\"�I must go down to the sea again, to the lonely sea and the sky; and all I ask is a tall ship and a star to steer her by.� | Flickr - Photo Sharing!\" target=\"_blank\"><img src=\"http://slidesjs.com/examples/standard/img/slide-5.jpg\" width=\"570\" height=\"270\" alt=\"Slide 5\"></a>
      <a href=\"http://www.flickr.com/photos/streetpreacher/2078765853/\" title=\"twelve.inch | Flickr - Photo Sharing!\" target=\"_blank\"><img src=\"http://slidesjs.com/examples/standard/img/slide-6.jpg\" width=\"570\" height=\"270\" alt=\"Slide 6\"></a>
      <a href=\"http://www.flickr.com/photos/aftab/3152515428/\" title=\"Save my love for loneliness | Flickr - Photo Sharing!\" target=\"_blank\"><img src=\"http://slidesjs.com/examples/standard/img/slide-7.jpg\" width=\"570\" height=\"270\" alt=\"Slide 7\"></a>
    </div>
    <a href=\"#\" class=\"prev\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsblog/images/arrow-prev.png"), "html", null, true);
        echo "\" width=\"24\" height=\"43\" alt=\"Arrow Prev\"></a>
    <a href=\"#\" class=\"next\"><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsblog/images/arrow-next.png"), "html", null, true);
        echo "\" width=\"24\" height=\"43\" alt=\"Arrow Next\"></a>
  </div>
  <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsblog/images/example-frame.png"), "html", null, true);
        echo "\" width=\"739\" height=\"341\" alt=\"Example Frame\" id=\"frame\">
</div>

<div id=\"intro\">
  <div class=\"title\">Realistic Outcome</div>
  <p>A very warm welcome to our website. We provide innovative solutions in insurance and finance for our corporate and commercial sector clients that add real calue by delivering more for a great deal less.</p>

</div>

<img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsblog/images/news.png"), "html", null, true);
        echo "\" width=\"853\" height=\"44\" id=\"separator\">
  </br>
  </br>
  <div id=\"news\">
    <form method=\"post\" ";
        // line 161
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t
\t";
        // line 163
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
\t
\t<input type=\"submit\" />
    </form>
  </div>
            
            <div id=\"right\">
              <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsblog/images/lastNews.png"), "html", null, true);
        echo "\" width=\"157\" height=\"42\" id=\"lastN\">
                </br></br>
                Winter Driving
                </br></br>
                12 days of Christmas Safety
                </br></br>
                New Glasgow office opens
                </br></br>
                Quinn Insurance 
                </br></br></br></br></br></br></br>
                <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsblog/images/partners.png"), "html", null, true);
        echo "\" width=\"156\" height=\"37\" id=\"lastN\">
                </br></br></br>
                <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsblog/images/cherry.png"), "html", null, true);
        echo "\" width=\"138\" height=\"56\"></br></br></br>
                <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsblog/images/biba.png"), "html", null, true);
        echo "\" width=\"68\" height=\"109\" ></br>
                </br>
                </br></br></br></br></br></br></br></br></br></br></br></br></br></br>           
            </div>
            
            <div class=\"clear\"></div>
            
\t";
        // line 191
        echo "\t";
        $this->displayBlock('sdzblog_body', $context, $blocks);
        // line 193
        echo "
";
    }

    public function getTemplateName()
    {
        return "gsBlogBundle:Blog:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
