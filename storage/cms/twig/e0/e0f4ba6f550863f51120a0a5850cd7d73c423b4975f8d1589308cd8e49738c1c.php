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

/* /home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-home/extension.htm */
class __TwigTemplate_64a9c006db22653ef549144705c61e52feaabb28567f14ca9dd5288136f7edd3 extends \Twig\Template
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
    <h2 class=\"lt-title center\">Users Voice</h2>
  </div>
</div>

<div class=\"lt-row row\">
  <div class=\"col s12\">
    <div class=\"lt-owl-carousel owl-carousel owl-theme\">
        <div class=\"item\">
          <div class=\"lt-owl-carousel-item item\">
            <div class=\"lt-testimonial-container\">
              <div class=\"lt-testimonial-content flow-text\">
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit fugiat quia doloribus obcaecati libero eum doloremque neque amet fugit magni</span>
              </div>
              <div class=\"lt-testimonial-author\">
                <div class=\"lt-testimonial-author-img\"><img class=\"circle responsive-img\" src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/extension/img-01.jpg");
        echo "\" alt=\"user\"></div>
                <div class=\"lt-testimonial-author-name\">John Smith</div>
                <div class=\"lt-testimonial-author-position\">CEO of NVLex</div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <div class=\"lt-owl-carousel-item item\">
            <div class=\"lt-testimonial-container\">
              <div class=\"lt-testimonial-content flow-text\">
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit fugiat quia doloribus obcaecati libero eum doloremque neque amet fugit magni</span>
              </div>
              <div class=\"lt-testimonial-author\">
                <div class=\"lt-testimonial-author-img\"><img class=\"circle responsive-img\" src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/extension/img-02.jpg");
        echo "\" alt=\"user\"></div>
                <div class=\"lt-testimonial-author-name\">Robert Brown</div>
                <div class=\"lt-testimonial-author-position\">Manager of Desynz</div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <div class=\"lt-owl-carousel-item item\">
            <div class=\"lt-testimonial-container\">
              <div class=\"lt-testimonial-content flow-text\">
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit fugiat quia doloribus obcaecati libero eum doloremque neque amet fugit magni</span>
              </div>
              <div class=\"lt-testimonial-author\">
                <div class=\"lt-testimonial-author-img\"><img class=\"circle responsive-img\" src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/pages/home/extension/img-03.jpg");
        echo "\" alt=\"user\"></div>
                <div class=\"lt-testimonial-author-name\">James Powell</div>
                <div class=\"lt-testimonial-author-position\">CEO of iQooQ</div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-home/extension.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 45,  70 => 31,  53 => 17,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"lt-row row\">
  <div class=\"lt-col col s12\">
    <h2 class=\"lt-title center\">Users Voice</h2>
  </div>
</div>

<div class=\"lt-row row\">
  <div class=\"col s12\">
    <div class=\"lt-owl-carousel owl-carousel owl-theme\">
        <div class=\"item\">
          <div class=\"lt-owl-carousel-item item\">
            <div class=\"lt-testimonial-container\">
              <div class=\"lt-testimonial-content flow-text\">
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit fugiat quia doloribus obcaecati libero eum doloremque neque amet fugit magni</span>
              </div>
              <div class=\"lt-testimonial-author\">
                <div class=\"lt-testimonial-author-img\"><img class=\"circle responsive-img\" src=\"{{ 'assets/img/pages/home/extension/img-01.jpg'|theme }}\" alt=\"user\"></div>
                <div class=\"lt-testimonial-author-name\">John Smith</div>
                <div class=\"lt-testimonial-author-position\">CEO of NVLex</div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <div class=\"lt-owl-carousel-item item\">
            <div class=\"lt-testimonial-container\">
              <div class=\"lt-testimonial-content flow-text\">
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit fugiat quia doloribus obcaecati libero eum doloremque neque amet fugit magni</span>
              </div>
              <div class=\"lt-testimonial-author\">
                <div class=\"lt-testimonial-author-img\"><img class=\"circle responsive-img\" src=\"{{ 'assets/img/pages/home/extension/img-02.jpg'|theme }}\" alt=\"user\"></div>
                <div class=\"lt-testimonial-author-name\">Robert Brown</div>
                <div class=\"lt-testimonial-author-position\">Manager of Desynz</div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"item\">
          <div class=\"lt-owl-carousel-item item\">
            <div class=\"lt-testimonial-container\">
              <div class=\"lt-testimonial-content flow-text\">
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit fugiat quia doloribus obcaecati libero eum doloremque neque amet fugit magni</span>
              </div>
              <div class=\"lt-testimonial-author\">
                <div class=\"lt-testimonial-author-img\"><img class=\"circle responsive-img\" src=\"{{ 'assets/img/pages/home/extension/img-03.jpg'|theme }}\" alt=\"user\"></div>
                <div class=\"lt-testimonial-author-name\">James Powell</div>
                <div class=\"lt-testimonial-author-position\">CEO of iQooQ</div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>", "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-home/extension.htm", "");
    }
}
