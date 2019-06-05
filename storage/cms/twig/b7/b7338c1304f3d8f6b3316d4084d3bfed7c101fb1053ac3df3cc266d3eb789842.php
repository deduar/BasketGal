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

/* /home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-register/mainpage.htm */
class __TwigTemplate_5fe0c8d47004b818490ac4fe4349bf3aff31bd198cc400d6eda4b700043b2b2e extends \Twig\Template
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
    <div class=\"lt-col col m8 s12\">
      <form>
        <div class=\"form-group lt-col col m12 s12\">
          <label for=\"exampleInputEmail1\">Nombres y Apellidos</label>
          <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Ingrese sus nombres y apellidos\">
        </div>
        <div class=\"form-group lt-col col m4 s4\">
          <label for=\"exampleInputPassword1\">Talla de Ropa</label>
          <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Talla de Ropa\">
        </div>
        <div class=\"form-group lt-col col m4 s4\">
          <label for=\"exampleInputPassword1\">DNI</label>
          <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"DNI\">
        </div>
        <div class=\"form-group lt-col col m4 s4\">
          <label for=\"exampleInputPassword1\">Fecha de Nacimiento</label>
          <input type=\"date\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Fecha de Nacimiento\">
        </div>
        <div class=\"form-group lt-col col m6 s6\">
          <label for=\"exampleInputPassword1\">Población</label>
          <input type=\"date\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Pblación\">
        </div>
        <div class=\"form-group lt-col col m6 s6\">
          <label for=\"exampleInputPassword1\">Codigo Postal</label>
          <input type=\"date\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Codigo Postal\">
        </div>
        <div class=\"form-group lt-col col m12 s12\">
          <label for=\"exampleInputPassword1\">Dirección</label>
          <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Dirección\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
      </form>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-register/mainpage.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
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
    <div class=\"lt-col col m8 s12\">
      <form>
        <div class=\"form-group lt-col col m12 s12\">
          <label for=\"exampleInputEmail1\">Nombres y Apellidos</label>
          <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Ingrese sus nombres y apellidos\">
        </div>
        <div class=\"form-group lt-col col m4 s4\">
          <label for=\"exampleInputPassword1\">Talla de Ropa</label>
          <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Talla de Ropa\">
        </div>
        <div class=\"form-group lt-col col m4 s4\">
          <label for=\"exampleInputPassword1\">DNI</label>
          <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"DNI\">
        </div>
        <div class=\"form-group lt-col col m4 s4\">
          <label for=\"exampleInputPassword1\">Fecha de Nacimiento</label>
          <input type=\"date\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Fecha de Nacimiento\">
        </div>
        <div class=\"form-group lt-col col m6 s6\">
          <label for=\"exampleInputPassword1\">Población</label>
          <input type=\"date\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Pblación\">
        </div>
        <div class=\"form-group lt-col col m6 s6\">
          <label for=\"exampleInputPassword1\">Codigo Postal</label>
          <input type=\"date\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Codigo Postal\">
        </div>
        <div class=\"form-group lt-col col m12 s12\">
          <label for=\"exampleInputPassword1\">Dirección</label>
          <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Dirección\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
      </form>
    </div>
  </div>
</div>", "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-register/mainpage.htm", "");
    }
}
