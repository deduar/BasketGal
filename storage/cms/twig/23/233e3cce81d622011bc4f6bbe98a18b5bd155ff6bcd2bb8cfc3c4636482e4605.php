<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-about/mainpage.htm */
class __TwigTemplate_6039c5205f2d637b68a5e879f6012512277726c25efa8d23bb4867bf46055a4c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"center\">
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <h2 class=\"lt-title\">What We Do</h2>
      <p class=\"flow-text\">Octaskin comes with the sample pages to help you get started faster. You can change the text and images and you're good to go.</p>
    </div>
  </div>

  <div class=\"lt-vertical-spacer\"></div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col m4 s12\">
      <i class=\"large pe-7s-display1 primary-color-text\"></i>
      <h5>Graphics</h5>
      <p>Develop a system of design that allows for a unified user experience across all their products on any platform.</p>
    </div>
    <div class=\"lt-col col m4 s12\">
      <i class=\"large pe-7s-tools primary-color-text\"></i>
      <h5>Coding</h5>
      <p>Develop a system of design that allows for a unified user experience across all their products on any platform.</p>
    </div>
    <div class=\"lt-col col m4 s12\">
      <i class=\"large pe-7s-news-paper primary-color-text\"></i>
      <h5>Templates</h5>
      <p>Develop a system of design that allows for a unified user experience across all their products on any platform.</p>
    </div>
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>
<div class=\"lt-vertical-spacer\"></div>

<div class=\"center\">
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <h2 class=\"lt-title\">Our Office</h2>
      <p class=\"flow-text\">Develop a system of design that allows for a unified user experience across all their products on any platform.</p>
    </div>
  </div>

  <div class=\"lt-vertical-spacer\"></div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col m6 s12\">
      <img class=\"responsive-img\" alt=\"image\" src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/about/mainpage/img-01.jpg");
        echo "\">
    </div>
    <div class=\"lt-col col m6 s12\">
      <img class=\"responsive-img\" alt=\"image\" src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/about/mainpage/img-02.jpg");
        echo "\">
    </div>
  </div>

  <div class=\"hide-on-small-only\" style=\"height: 20px;\"></div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col m6 s12\">
      <img class=\"responsive-img\" alt=\"image\" src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/about/mainpage/img-03.jpg");
        echo "\">
    </div>
    <div class=\"lt-col col m6 s12\">
      <img class=\"responsive-img\" alt=\"image\" src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/about/mainpage/img-04.jpg");
        echo "\">
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-about/mainpage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 59,  98 => 56,  87 => 48,  81 => 45,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"center\">
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <h2 class=\"lt-title\">What We Do</h2>
      <p class=\"flow-text\">Octaskin comes with the sample pages to help you get started faster. You can change the text and images and you're good to go.</p>
    </div>
  </div>

  <div class=\"lt-vertical-spacer\"></div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col m4 s12\">
      <i class=\"large pe-7s-display1 primary-color-text\"></i>
      <h5>Graphics</h5>
      <p>Develop a system of design that allows for a unified user experience across all their products on any platform.</p>
    </div>
    <div class=\"lt-col col m4 s12\">
      <i class=\"large pe-7s-tools primary-color-text\"></i>
      <h5>Coding</h5>
      <p>Develop a system of design that allows for a unified user experience across all their products on any platform.</p>
    </div>
    <div class=\"lt-col col m4 s12\">
      <i class=\"large pe-7s-news-paper primary-color-text\"></i>
      <h5>Templates</h5>
      <p>Develop a system of design that allows for a unified user experience across all their products on any platform.</p>
    </div>
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>
<div class=\"lt-vertical-spacer\"></div>

<div class=\"center\">
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <h2 class=\"lt-title\">Our Office</h2>
      <p class=\"flow-text\">Develop a system of design that allows for a unified user experience across all their products on any platform.</p>
    </div>
  </div>

  <div class=\"lt-vertical-spacer\"></div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col m6 s12\">
      <img class=\"responsive-img\" alt=\"image\" src=\"{{ 'assets/img/pages/about/mainpage/img-01.jpg'|theme }}\">
    </div>
    <div class=\"lt-col col m6 s12\">
      <img class=\"responsive-img\" alt=\"image\" src=\"{{ 'assets/img/pages/about/mainpage/img-02.jpg'|theme }}\">
    </div>
  </div>

  <div class=\"hide-on-small-only\" style=\"height: 20px;\"></div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col m6 s12\">
      <img class=\"responsive-img\" alt=\"image\" src=\"{{ 'assets/img/pages/about/mainpage/img-03.jpg'|theme }}\">
    </div>
    <div class=\"lt-col col m6 s12\">
      <img class=\"responsive-img\" alt=\"image\" src=\"{{ 'assets/img/pages/about/mainpage/img-04.jpg'|theme }}\">
    </div>
  </div>
</div>", "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-about/mainpage.htm", "");
    }
}
