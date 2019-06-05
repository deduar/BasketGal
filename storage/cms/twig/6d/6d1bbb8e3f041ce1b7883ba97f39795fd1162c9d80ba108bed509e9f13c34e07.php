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

/* /home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-portfolio/mainpage.htm */
class __TwigTemplate_3de01d98543b7cacd643ce80603695df0351694c175c689eb6bf036e5e3486fa extends \Twig\Template
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
      <h2 class=\"lt-title\">What We Did</h2>
      <p class=\"flow-text\">Octaskin comes with the sample pages to help you get started faster. You can change the text and images and you're good to go.</p>
    </div>
  </div>

  <div class=\"lt-vertical-spacer\"></div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col m4 s12\">
      <i class=\"large pe-7s-diamond primary-color-text\"></i>
      <h5>Vectors</h5>
      <p>Develop a system of design that allows for a unified user experience.</p>
      <h2 class=\"lt-title primary-color-text\">128</h2>
    </div>
    <div class=\"lt-col col m4 s12\">
      <i class=\"large pe-7s-plugin primary-color-text\"></i>
      <h5>UI Kits</h5>
      <p>Develop a system of design that allows for a unified user experience.</p>
      <h2 class=\"lt-title primary-color-text\">19</h2>
    </div>
    <div class=\"lt-col col m4 s12\">
      <i class=\"large pe-7s-photo primary-color-text\"></i>
      <h5>Themes</h5>
      <p>Develop a system of design that allows for a unified user experience.</p>
      <h2 class=\"lt-title primary-color-text\">256</h2>
    </div>
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>
<div class=\"lt-vertical-spacer\"></div>

<div class=\"center\">
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <h2 class=\"lt-title\">Our Projects</h2>
      <p class=\"flow-text\">Develop a system of design that allows for a unified user experience across all their products on any platform.</p>
    </div>
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>

<div class=\"lt-row row\">
  <div class=\"lt-col col m4 s12\">
    <div class=\"card grey lighten-3 z-depth-0\">
      <div class=\"card-image\">
        <img class=\"responsive-img\" alt=\"image\" src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/portfolio/mainpage/img-01.jpg");
        echo "\">
        <span class=\"card-title\">Textures</span>
      </div>
      <div class=\"card-content\">
        <p>Build absolutely anything from simple promotional sites to high powered web applications.</p>
      </div>
      <div class=\"card-action\">
        <a href=\"https://www.laratify.com/\" target=\"_blank\">Learn More</a>
      </div>
    </div>
  </div>
  <div class=\"lt-col col m4 s12\">
    <div class=\"card grey lighten-3 z-depth-0\">
      <div class=\"card-image\">
        <img class=\"responsive-img\" alt=\"image\" src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/portfolio/mainpage/img-02.jpg");
        echo "\">
        <span class=\"card-title\">Patterns</span>
      </div>
      <div class=\"card-content\">
        <p>Build absolutely anything from simple promotional sites to high powered web applications.</p>
      </div>
      <div class=\"card-action\">
        <a href=\"https://www.laratify.com/\" target=\"_blank\">Learn More</a>
      </div>
    </div>
  </div>
  <div class=\"lt-col col m4 s12\">
    <div class=\"card grey lighten-3 z-depth-0\">
      <div class=\"card-image\">
        <img class=\"responsive-img\" alt=\"image\" src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/portfolio/mainpage/img-03.jpg");
        echo "\">
        <span class=\"card-title\">Icons</span>
      </div>
      <div class=\"card-content\">
        <p>Build absolutely anything from simple promotional sites to high powered web applications.</p>
      </div>
      <div class=\"card-action\">
        <a href=\"https://www.laratify.com/\" target=\"_blank\">Learn More</a>
      </div>
    </div>
  </div>
</div>

<div class=\"hide-on-small-only\" style=\"height: 20px;\"></div>

<div class=\"lt-row row\">
  <div class=\"lt-col col m4 s12\">
    <div class=\"card grey lighten-3 z-depth-0\">
      <div class=\"card-image\">
        <img class=\"responsive-img\" alt=\"image\" src=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/portfolio/mainpage/img-04.jpg");
        echo "\">
        <span class=\"card-title\">Brushes</span>
      </div>
      <div class=\"card-content\">
        <p>Build absolutely anything from simple promotional sites to high powered web applications.</p>
      </div>
      <div class=\"card-action\">
        <a href=\"https://www.laratify.com/\" target=\"_blank\">Learn More</a>
      </div>
    </div>
  </div>
  <div class=\"lt-col col m4 s12\">
    <div class=\"card grey lighten-3 z-depth-0\">
      <div class=\"card-image\">
        <img class=\"responsive-img\" alt=\"image\" src=\"";
        // line 112
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/portfolio/mainpage/img-05.jpg");
        echo "\">
        <span class=\"card-title\">Layers</span>
      </div>
      <div class=\"card-content\">
        <p>Build absolutely anything from simple promotional sites to high powered web applications.</p>
      </div>
      <div class=\"card-action\">
        <a href=\"https://www.laratify.com/\" target=\"_blank\">Learn More</a>
      </div>
    </div>
  </div>
  <div class=\"lt-col col m4 s12\">
    <div class=\"card grey lighten-3 z-depth-0\">
      <div class=\"card-image\">
        <img class=\"responsive-img\" alt=\"image\" src=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/portfolio/mainpage/img-06.jpg");
        echo "\">
        <span class=\"card-title\">Logos</span>
      </div>
      <div class=\"card-content\">
        <p>Build absolutely anything from simple promotional sites to high powered web applications.</p>
      </div>
      <div class=\"card-action\">
        <a href=\"https://www.laratify.com/\" target=\"_blank\">Learn More</a>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-portfolio/mainpage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 126,  160 => 112,  143 => 98,  121 => 79,  104 => 65,  87 => 51,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"center\">
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <h2 class=\"lt-title\">What We Did</h2>
      <p class=\"flow-text\">Octaskin comes with the sample pages to help you get started faster. You can change the text and images and you're good to go.</p>
    </div>
  </div>

  <div class=\"lt-vertical-spacer\"></div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col m4 s12\">
      <i class=\"large pe-7s-diamond primary-color-text\"></i>
      <h5>Vectors</h5>
      <p>Develop a system of design that allows for a unified user experience.</p>
      <h2 class=\"lt-title primary-color-text\">128</h2>
    </div>
    <div class=\"lt-col col m4 s12\">
      <i class=\"large pe-7s-plugin primary-color-text\"></i>
      <h5>UI Kits</h5>
      <p>Develop a system of design that allows for a unified user experience.</p>
      <h2 class=\"lt-title primary-color-text\">19</h2>
    </div>
    <div class=\"lt-col col m4 s12\">
      <i class=\"large pe-7s-photo primary-color-text\"></i>
      <h5>Themes</h5>
      <p>Develop a system of design that allows for a unified user experience.</p>
      <h2 class=\"lt-title primary-color-text\">256</h2>
    </div>
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>
<div class=\"lt-vertical-spacer\"></div>

<div class=\"center\">
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <h2 class=\"lt-title\">Our Projects</h2>
      <p class=\"flow-text\">Develop a system of design that allows for a unified user experience across all their products on any platform.</p>
    </div>
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>

<div class=\"lt-row row\">
  <div class=\"lt-col col m4 s12\">
    <div class=\"card grey lighten-3 z-depth-0\">
      <div class=\"card-image\">
        <img class=\"responsive-img\" alt=\"image\" src=\"{{ 'assets/img/pages/portfolio/mainpage/img-01.jpg'|theme }}\">
        <span class=\"card-title\">Textures</span>
      </div>
      <div class=\"card-content\">
        <p>Build absolutely anything from simple promotional sites to high powered web applications.</p>
      </div>
      <div class=\"card-action\">
        <a href=\"https://www.laratify.com/\" target=\"_blank\">Learn More</a>
      </div>
    </div>
  </div>
  <div class=\"lt-col col m4 s12\">
    <div class=\"card grey lighten-3 z-depth-0\">
      <div class=\"card-image\">
        <img class=\"responsive-img\" alt=\"image\" src=\"{{ 'assets/img/pages/portfolio/mainpage/img-02.jpg'|theme }}\">
        <span class=\"card-title\">Patterns</span>
      </div>
      <div class=\"card-content\">
        <p>Build absolutely anything from simple promotional sites to high powered web applications.</p>
      </div>
      <div class=\"card-action\">
        <a href=\"https://www.laratify.com/\" target=\"_blank\">Learn More</a>
      </div>
    </div>
  </div>
  <div class=\"lt-col col m4 s12\">
    <div class=\"card grey lighten-3 z-depth-0\">
      <div class=\"card-image\">
        <img class=\"responsive-img\" alt=\"image\" src=\"{{ 'assets/img/pages/portfolio/mainpage/img-03.jpg'|theme }}\">
        <span class=\"card-title\">Icons</span>
      </div>
      <div class=\"card-content\">
        <p>Build absolutely anything from simple promotional sites to high powered web applications.</p>
      </div>
      <div class=\"card-action\">
        <a href=\"https://www.laratify.com/\" target=\"_blank\">Learn More</a>
      </div>
    </div>
  </div>
</div>

<div class=\"hide-on-small-only\" style=\"height: 20px;\"></div>

<div class=\"lt-row row\">
  <div class=\"lt-col col m4 s12\">
    <div class=\"card grey lighten-3 z-depth-0\">
      <div class=\"card-image\">
        <img class=\"responsive-img\" alt=\"image\" src=\"{{ 'assets/img/pages/portfolio/mainpage/img-04.jpg'|theme }}\">
        <span class=\"card-title\">Brushes</span>
      </div>
      <div class=\"card-content\">
        <p>Build absolutely anything from simple promotional sites to high powered web applications.</p>
      </div>
      <div class=\"card-action\">
        <a href=\"https://www.laratify.com/\" target=\"_blank\">Learn More</a>
      </div>
    </div>
  </div>
  <div class=\"lt-col col m4 s12\">
    <div class=\"card grey lighten-3 z-depth-0\">
      <div class=\"card-image\">
        <img class=\"responsive-img\" alt=\"image\" src=\"{{ 'assets/img/pages/portfolio/mainpage/img-05.jpg'|theme }}\">
        <span class=\"card-title\">Layers</span>
      </div>
      <div class=\"card-content\">
        <p>Build absolutely anything from simple promotional sites to high powered web applications.</p>
      </div>
      <div class=\"card-action\">
        <a href=\"https://www.laratify.com/\" target=\"_blank\">Learn More</a>
      </div>
    </div>
  </div>
  <div class=\"lt-col col m4 s12\">
    <div class=\"card grey lighten-3 z-depth-0\">
      <div class=\"card-image\">
        <img class=\"responsive-img\" alt=\"image\" src=\"{{ 'assets/img/pages/portfolio/mainpage/img-06.jpg'|theme }}\">
        <span class=\"card-title\">Logos</span>
      </div>
      <div class=\"card-content\">
        <p>Build absolutely anything from simple promotional sites to high powered web applications.</p>
      </div>
      <div class=\"card-action\">
        <a href=\"https://www.laratify.com/\" target=\"_blank\">Learn More</a>
      </div>
    </div>
  </div>
</div>", "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-portfolio/mainpage.htm", "");
    }
}
