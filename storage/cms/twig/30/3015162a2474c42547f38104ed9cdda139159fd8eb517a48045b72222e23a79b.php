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

/* /home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-contact/mainpage.htm */
class __TwigTemplate_75a28fbeedeceaeeaa5b7f2a6cb5b5f65b9f1653567c6e4f34cbb7cf609cc39c extends \Twig\Template
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
    <h2 class=\"lt-title\">What We Do</h2>
    <p class=\"flow-text\">Octaskin provides general customer service via email and aims to respond to all queries within 24 hours.</p>
    <p>Below is a sample of contact form to demo Materialize CSS form elements.</p>
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>

<form class=\"col s12\">
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s6\">
      <input type=\"text\" class=\"validate\" id=\"first_name\">
      <label for=\"first_name\" class=\"active\">First Name</label>
    </div>
    <div class=\"input-field lt-col col s6\">
      <input type=\"text\" id=\"last_name\">
      <label for=\"last_name\">Last Name</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s12\">
      <input type=\"email\" class=\"validate\" id=\"email\">
      <label data-success=\"right\" data-error=\"wrong\" for=\"email\">Email</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s12\">
      <textarea id=\"textarea1\" class=\"materialize-textarea\"></textarea>
      <label for=\"textarea1\">Description</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s12\">
      <select multiple>
        <option value=\"\" disabled selected>Choose your option</option>
        <option value=\"1\">Option 1</option>
        <option value=\"2\">Option 2</option>
        <option value=\"3\">Option 3</option>
      </select>
      <label>Choose Option</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <div class=\"file-field input-field\">
        <div class=\"btn\">
          <span>File</span>
          <input type=\"file\" multiple>
        </div>
        <div class=\"file-path-wrapper\">
          <input class=\"file-path validate\" type=\"text\" placeholder=\"Upload one or more files\">
        </div>
      </div>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <label for=\"datepicker\">Set the Date</label>
      <input type=\"date\" class=\"datepicker\" id=\"datepicker\">
    </div>
  </div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <input type=\"checkbox\" class=\"filled-in\" id=\"filled-in-box\" checked=\"checked\" />
      <label for=\"filled-in-box\">Send copy to my email</label>
    </div>
  </div>

  <div class=\"lt-vertical-spacer\"></div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <button class=\"btn-large waves-effect waves-light\" type=\"submit\" name=\"action\">Submit <i class=\"material-icons right\">send</i></button>
    </div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-contact/mainpage.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"lt-row row\">
  <div class=\"lt-col col s12\">
    <h2 class=\"lt-title\">What We Do</h2>
    <p class=\"flow-text\">Octaskin provides general customer service via email and aims to respond to all queries within 24 hours.</p>
    <p>Below is a sample of contact form to demo Materialize CSS form elements.</p>
  </div>
</div>

<div class=\"lt-vertical-spacer\"></div>

<form class=\"col s12\">
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s6\">
      <input type=\"text\" class=\"validate\" id=\"first_name\">
      <label for=\"first_name\" class=\"active\">First Name</label>
    </div>
    <div class=\"input-field lt-col col s6\">
      <input type=\"text\" id=\"last_name\">
      <label for=\"last_name\">Last Name</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s12\">
      <input type=\"email\" class=\"validate\" id=\"email\">
      <label data-success=\"right\" data-error=\"wrong\" for=\"email\">Email</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s12\">
      <textarea id=\"textarea1\" class=\"materialize-textarea\"></textarea>
      <label for=\"textarea1\">Description</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"input-field lt-col col s12\">
      <select multiple>
        <option value=\"\" disabled selected>Choose your option</option>
        <option value=\"1\">Option 1</option>
        <option value=\"2\">Option 2</option>
        <option value=\"3\">Option 3</option>
      </select>
      <label>Choose Option</label>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <div class=\"file-field input-field\">
        <div class=\"btn\">
          <span>File</span>
          <input type=\"file\" multiple>
        </div>
        <div class=\"file-path-wrapper\">
          <input class=\"file-path validate\" type=\"text\" placeholder=\"Upload one or more files\">
        </div>
      </div>
    </div>
  </div>
  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <label for=\"datepicker\">Set the Date</label>
      <input type=\"date\" class=\"datepicker\" id=\"datepicker\">
    </div>
  </div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <input type=\"checkbox\" class=\"filled-in\" id=\"filled-in-box\" checked=\"checked\" />
      <label for=\"filled-in-box\">Send copy to my email</label>
    </div>
  </div>

  <div class=\"lt-vertical-spacer\"></div>

  <div class=\"lt-row row\">
    <div class=\"lt-col col s12\">
      <button class=\"btn-large waves-effect waves-light\" type=\"submit\" name=\"action\">Submit <i class=\"material-icons right\">send</i></button>
    </div>
  </div>
</form>", "/home/deduar/Projects/BasketGal/themes/laratify-octobercms-octaskin/partials/pages-contact/mainpage.htm", "");
    }
}
