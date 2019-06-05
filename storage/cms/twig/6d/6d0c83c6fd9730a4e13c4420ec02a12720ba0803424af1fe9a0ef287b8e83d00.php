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

/* /home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-home/slideshow.htm */
class __TwigTemplate_7ea9e74837087945f0ffef904da42cb33b572d97c48ad7cf77b4df216a8505bd extends \Twig\Template
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
        echo "<div class=\"lt-row row\">
  <div class=\"lt-col col s12\">
    <div class=\"lt-slider slider fullscreen\">
      <ul class=\"slides\">
        <li>
          <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/slideshow/niko.png");
        echo "\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">I Campus BasketGal</h2>
            <h5 class=\"lt-slider-subtitle\">Primera Edicion - Vigo 2019</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Proceso de Inscripción<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">Ver Detalles</a> o <a href=\"https://www.laratify.com/\" target=\"_blank\">Contactanos</a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/slideshow/niko-2.png");
        echo "\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Temporada 2018 - 2019</h2>
            <h5 class=\"lt-slider-subtitle\">Liga BaskeGal o Federados</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Galería<i class=\"material-icons right\">input</i></a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/slideshow/niko-3.png");
        echo "\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Comparte con nosotros tus fotos o videos</h2>
            <h5 class=\"lt-slider-subtitle\">Los publicaremos en nuestra páina</h5>
            <div class=\"lt-slider-links\">
              <a href=\"https://www.laratify.com/\" target=\"_blank\">Contactanos</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-home/slideshow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 29,  58 => 19,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"lt-row row\">
  <div class=\"lt-col col s12\">
    <div class=\"lt-slider slider fullscreen\">
      <ul class=\"slides\">
        <li>
          <img src=\"{{ 'assets/img/pages/home/slideshow/niko.png'|theme }}\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">I Campus BasketGal</h2>
            <h5 class=\"lt-slider-subtitle\">Primera Edicion - Vigo 2019</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Proceso de Inscripción<i class=\"material-icons right\">input</i></a>
            </div>
            <div class=\"lt-slider-links\">
              <a href=\"https://m.do.co/c/396efaba7c20\" target=\"_blank\">Ver Detalles</a> o <a href=\"https://www.laratify.com/\" target=\"_blank\">Contactanos</a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"{{ 'assets/img/pages/home/slideshow/niko-2.png'|theme }}\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Temporada 2018 - 2019</h2>
            <h5 class=\"lt-slider-subtitle\">Liga BaskeGal o Federados</h5>
            <div class=\"lt-slider-button\">
              <a href=\"https://octobercms.com/theme/laratify-octobercms-octaskin\" target=\"_blank\" class=\"waves-effect waves-light btn-large primary-color-background\">Galería<i class=\"material-icons right\">input</i></a>
            </div>
          </div>
        </li>
        <li>
          <img src=\"{{ 'assets/img/pages/home/slideshow/niko-3.png'|theme }}\" alt=\"image\">
          <div class=\"caption center-align\">
            <h2 class=\"lt-slider-title\">Comparte con nosotros tus fotos o videos</h2>
            <h5 class=\"lt-slider-subtitle\">Los publicaremos en nuestra páina</h5>
            <div class=\"lt-slider-links\">
              <a href=\"https://www.laratify.com/\" target=\"_blank\">Contactanos</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>", "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-home/slideshow.htm", "");
    }
}
