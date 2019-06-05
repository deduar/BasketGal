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

/* /home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/pages/home.htm */
class __TwigTemplate_a49cfa56c15cf10812da3c665a0a40314ed91d14cb31dd82ecf3af60556b2c3f extends \Twig\Template
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
        echo "<section id=\"lt-slideshow\" class=\"lt-section lt-section-fullwidth section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-slideshow-content\">
      ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages-home/slideshow"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </div>
  </div>
</section>

<section id=\"lt-feature\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-feature-content\">
      ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages-home/feature"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "    </div>
  </div>
</section>

<section id=\"lt-utility\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-utility-content\">
      ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages-home/utility"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "    </div>
  </div>
</section>

<section id=\"lt-mainpage\" class=\"lt-section lt-section-fullwidth section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-mainpage-content\">
      ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages-home/mainpage"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "    </div>
  </div>
</section>

<section id=\"lt-bottom\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-bottom-content\">
      ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pages-home/bottom"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  92 => 36,  83 => 29,  79 => 28,  70 => 21,  66 => 20,  57 => 13,  53 => 12,  44 => 5,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"lt-slideshow\" class=\"lt-section lt-section-fullwidth section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-slideshow-content\">
      {% partial \"pages-home/slideshow\" %}
    </div>
  </div>
</section>

<section id=\"lt-feature\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-feature-content\">
      {% partial \"pages-home/feature\" %}
    </div>
  </div>
</section>

<section id=\"lt-utility\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-utility-content\">
      {% partial \"pages-home/utility\" %}
    </div>
  </div>
</section>

<section id=\"lt-mainpage\" class=\"lt-section lt-section-fullwidth section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-mainpage-content\">
      {% partial \"pages-home/mainpage\" %}
    </div>
  </div>
</section>

<section id=\"lt-bottom\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-bottom-content\">
      {% partial \"pages-home/bottom\" %}
    </div>
  </div>
</section>", "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/pages/home.htm", "");
    }
}
