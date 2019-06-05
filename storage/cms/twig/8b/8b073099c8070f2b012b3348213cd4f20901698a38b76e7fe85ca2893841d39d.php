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

/* /home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-home/mainpage.htm */
class __TwigTemplate_9d861b538dae6a01d9200e4469bed9768cca047c2a6f179238c06e8a3f8d4810 extends \Twig\Template
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
  <div class=\"lt-col col m6 s12\">
    <div class=\"parallax-container\">
      <div class=\"lt-parallax parallax\"><img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/mainpage/ligabasketgal.png");
        echo "\" alt=\"image\"></div>
    </div>
  </div>
  <div class=\"lt-col col m6 s12\">
    <div class=\"lt-super-large-padding center\">
      <div class=\"lt-col col s12\">
        <h2 class=\"lt-title\">Liga BasketGal</h2>
      </div>
      <div class=\"lt-col col s12\">
        <ul id=\"lt-materializecss-tab\" class=\"lt-tabs tabs\">
          <li class=\"tab lt-col col s4\"><a class=\"active\" href=\"#lt-materializecss-tab1\">Noticias</a></li>
          <li class=\"tab lt-col col s4\"><a href=\"#lt-materializecss-tab2\">Colegios y Clubs</a></li>
          <li class=\"tab lt-col col s4\"><a href=\"#lt-materializecss-tab3\">Temporada 2018/19</a></li>
        </ul>
      </div>
      <div id=\"lt-materializecss-tab1\" class=\"lt-tab-content lt-col col s12\">
        <p>¡Tenemos nuevas actas para las concentraciones de 3×3!</p>
        <p>Inicio ligas escolares Basketgal Xogade 2018-2019</p>
        <p>¡Comenzamos la temporada 2018-2019!</p>
      </div>
      <div id=\"lt-materializecss-tab2\" class=\"lt-tab-content lt-col col s12\">
        <p>Acacias / Alba / Amor de Dios / BMB la Guardia / CD Andersen / Carmelitas / Castro San Miguel / Cluny / Divino Salvador / Escultor Acuña / Estudio / Gracía Barbón / CB Nigrán / San José de la Guía / Sauces</p>
      </div>
      <div id=\"lt-materializecss-tab3\" class=\"lt-tab-content lt-col col s12\">
        <p>La liga finalizo con exito y una asistencia record. </p>
        <p>¡ Bravo por nuestro atletas !</p>
      </div>

      
    </div>
  </div>
</div>

<div class=\"lt-row row\">
  <div class=\"lt-col col m6 s12\">
    <div class=\"lt-super-large-padding center\">
      <div class=\"lt-col col s12\">
        <h2 class=\"lt-title\">Liga Federada</h2>
      </div>
      <div class=\"lt-col col s12\">
        <ul id=\"lt-octobercms-tab\" class=\"lt-tabs tabs\">
          <li class=\"tab lt-col col s6\"><a class=\"active\" href=\"#lt-octobercms-tab1\">Noticias</a></li>
          <li class=\"tab lt-col col s6\"><a href=\"#lt-octobercms-tab2\">Temporada 2018/19</a></li>
        </ul>
      </div>
      <div id=\"lt-octobercms-tab1\" class=\"lt-tab-content lt-col col s12\">
        <p>Publicados los calendarios de la sección federada para minibasket</p>
        <p>Publicados los calendarios de la sección federada para cadete e infantil</p>
      </div>
      <div id=\"lt-octobercms-tab2\" class=\"lt-tab-content lt-col col s12\">
        <p>Calendarios sección federada del 16 de diciembre</p>
        <p>Resultados sección federada del 2 y 3 de diciembre</p>
      </div>

    </div>
  </div>
  <div class=\"lt-col col m6 s12\">
    <div class=\"parallax-container\">
      <div class=\"lt-parallax parallax\"><img src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/mainpage/seleccion-femenina.png");
        echo "\" alt=\"image\"></div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-home/mainpage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 62,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"lt-row row\">
  <div class=\"lt-col col m6 s12\">
    <div class=\"parallax-container\">
      <div class=\"lt-parallax parallax\"><img src=\"{{ 'assets/img/pages/home/mainpage/ligabasketgal.png'|theme }}\" alt=\"image\"></div>
    </div>
  </div>
  <div class=\"lt-col col m6 s12\">
    <div class=\"lt-super-large-padding center\">
      <div class=\"lt-col col s12\">
        <h2 class=\"lt-title\">Liga BasketGal</h2>
      </div>
      <div class=\"lt-col col s12\">
        <ul id=\"lt-materializecss-tab\" class=\"lt-tabs tabs\">
          <li class=\"tab lt-col col s4\"><a class=\"active\" href=\"#lt-materializecss-tab1\">Noticias</a></li>
          <li class=\"tab lt-col col s4\"><a href=\"#lt-materializecss-tab2\">Colegios y Clubs</a></li>
          <li class=\"tab lt-col col s4\"><a href=\"#lt-materializecss-tab3\">Temporada 2018/19</a></li>
        </ul>
      </div>
      <div id=\"lt-materializecss-tab1\" class=\"lt-tab-content lt-col col s12\">
        <p>¡Tenemos nuevas actas para las concentraciones de 3×3!</p>
        <p>Inicio ligas escolares Basketgal Xogade 2018-2019</p>
        <p>¡Comenzamos la temporada 2018-2019!</p>
      </div>
      <div id=\"lt-materializecss-tab2\" class=\"lt-tab-content lt-col col s12\">
        <p>Acacias / Alba / Amor de Dios / BMB la Guardia / CD Andersen / Carmelitas / Castro San Miguel / Cluny / Divino Salvador / Escultor Acuña / Estudio / Gracía Barbón / CB Nigrán / San José de la Guía / Sauces</p>
      </div>
      <div id=\"lt-materializecss-tab3\" class=\"lt-tab-content lt-col col s12\">
        <p>La liga finalizo con exito y una asistencia record. </p>
        <p>¡ Bravo por nuestro atletas !</p>
      </div>

      
    </div>
  </div>
</div>

<div class=\"lt-row row\">
  <div class=\"lt-col col m6 s12\">
    <div class=\"lt-super-large-padding center\">
      <div class=\"lt-col col s12\">
        <h2 class=\"lt-title\">Liga Federada</h2>
      </div>
      <div class=\"lt-col col s12\">
        <ul id=\"lt-octobercms-tab\" class=\"lt-tabs tabs\">
          <li class=\"tab lt-col col s6\"><a class=\"active\" href=\"#lt-octobercms-tab1\">Noticias</a></li>
          <li class=\"tab lt-col col s6\"><a href=\"#lt-octobercms-tab2\">Temporada 2018/19</a></li>
        </ul>
      </div>
      <div id=\"lt-octobercms-tab1\" class=\"lt-tab-content lt-col col s12\">
        <p>Publicados los calendarios de la sección federada para minibasket</p>
        <p>Publicados los calendarios de la sección federada para cadete e infantil</p>
      </div>
      <div id=\"lt-octobercms-tab2\" class=\"lt-tab-content lt-col col s12\">
        <p>Calendarios sección federada del 16 de diciembre</p>
        <p>Resultados sección federada del 2 y 3 de diciembre</p>
      </div>

    </div>
  </div>
  <div class=\"lt-col col m6 s12\">
    <div class=\"parallax-container\">
      <div class=\"lt-parallax parallax\"><img src=\"{{ 'assets/img/pages/home/mainpage/seleccion-femenina.png'|theme }}\" alt=\"image\"></div>
    </div>
  </div>
</div>", "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-home/mainpage.htm", "");
    }
}
