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

/* /home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-home/bottom.htm */
class __TwigTemplate_6af6e470580459ac5091ac46eced6d37dce763df03b29cfed72a6788e4aeac9f extends \Twig\Template
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
    <h2 class=\"lt-title center\">Quienes somos nosotros </h2>
    <p class=\"center\">Somos la Asociación Deportiva Basketgal</p>
    <p class=\"center\">Somos una liga de baloncesto que organizamos junto con los colegios y clubes de nuestra region y en la que participantes los equipos en un formato de liga federada bajo el nombre de Basketgal-Obradoiro.</p>
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>

<div class=\"lt-row row\">
  <div class=\"lt-col col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/bottom/img-01.jpg");
        echo "\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">Rafa Viña (Kopi)</span>
        <p class=\"lt-card-subtitle\">Presidente</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">Rafa Viña (Kopi)<i class=\"material-icons right\">close</i></span>
        <p>Una breve reseña de su trayectoria como deportista</p>
      </div>
    </div>
  </div>
  <div class=\"col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/bottom/img-02.jpg");
        echo "\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">Rosa Mª Martínez Monte (Rosi)</span>
        <p class=\"lt-card-subtitle\">Vicepresidenta</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">Rosa Mª Martínez Monte (Rosi<i class=\"material-icons right\">close</i></span>
        <p>Una breve reseña de su trayectoria como deportista</p>
      </div>
    </div>
  </div>
  <div class=\"col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/bottom/img-04.jpg");
        echo "\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">Paula Fernández López</span>
        <p class=\"lt-card-subtitle\">Secretaria</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">Paula Fernández López<i class=\"material-icons right\">close</i></span>
        <p>Una breve reseña de su trayectoria como deportista</p>
      </div>
    </div>
  </div>
  <div class=\"col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/bottom/img-03.jpg");
        echo "\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">José A. Fernández Alonso</span>
        <p class=\"lt-card-subtitle\">Tesorero</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">José A. Fernández Alonso<i class=\"material-icons right\">close</i></span>
        <p>Una breve reseña de su trayectoria como deportista</p>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-home/bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 75,  97 => 55,  74 => 35,  51 => 15,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"lt-row row\">
  <div class=\"lt-col col s12\">
    <h2 class=\"lt-title center\">Quienes somos nosotros </h2>
    <p class=\"center\">Somos la Asociación Deportiva Basketgal</p>
    <p class=\"center\">Somos una liga de baloncesto que organizamos junto con los colegios y clubes de nuestra region y en la que participantes los equipos en un formato de liga federada bajo el nombre de Basketgal-Obradoiro.</p>
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>

<div class=\"lt-row row\">
  <div class=\"lt-col col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"{{ 'assets/img/pages/home/bottom/img-01.jpg'|theme }}\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">Rafa Viña (Kopi)</span>
        <p class=\"lt-card-subtitle\">Presidente</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">Rafa Viña (Kopi)<i class=\"material-icons right\">close</i></span>
        <p>Una breve reseña de su trayectoria como deportista</p>
      </div>
    </div>
  </div>
  <div class=\"col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"{{ 'assets/img/pages/home/bottom/img-02.jpg'|theme }}\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">Rosa Mª Martínez Monte (Rosi)</span>
        <p class=\"lt-card-subtitle\">Vicepresidenta</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">Rosa Mª Martínez Monte (Rosi<i class=\"material-icons right\">close</i></span>
        <p>Una breve reseña de su trayectoria como deportista</p>
      </div>
    </div>
  </div>
  <div class=\"col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"{{ 'assets/img/pages/home/bottom/img-04.jpg'|theme }}\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">Paula Fernández López</span>
        <p class=\"lt-card-subtitle\">Secretaria</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">Paula Fernández López<i class=\"material-icons right\">close</i></span>
        <p>Una breve reseña de su trayectoria como deportista</p>
      </div>
    </div>
  </div>
  <div class=\"col l3 m6 s12\">
    <div class=\"lt-card card z-depth-0\">
      <div class=\"card-image waves-effect waves-block waves-light\">
        <img class=\"activator\" src=\"{{ 'assets/img/pages/home/bottom/img-03.jpg'|theme }}\">
      </div>
      <div class=\"card-content\">
        <span class=\"lt-card-title card-title activator grey-text text-darken-4\">José A. Fernández Alonso</span>
        <p class=\"lt-card-subtitle\">Tesorero</p>
        <p class=\"lt-card-social-buttons\">
          <a href=\"#\"><i class=\"lt-card-social-button blue-text text-darken-4 fa fa-facebook-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button blue-text fa fa-twitter-square\"></i></a>
          <a href=\"#\"><i class=\"lt-card-social-button red-text fa fa-google-plus-square\"></i></a>
        </p>
      </div>
      <div class=\"card-reveal\">
        <span class=\"lt-card-title card-title grey-text text-darken-4\">José A. Fernández Alonso<i class=\"material-icons right\">close</i></span>
        <p>Una breve reseña de su trayectoria como deportista</p>
      </div>
    </div>
  </div>
</div>", "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-home/bottom.htm", "");
    }
}
