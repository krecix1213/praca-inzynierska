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

/* _partials/menu.html.twig */
class __TwigTemplate_a9fc07caee82da356d04c677771ce2a38a05251dac417cc2b1c1037396950ba0 extends \Twig\Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/menu.html.twig"));

        // line 1
        echo "<nav class=\"nanbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <li class=\"navbar-item\">
                <a class=\"nav-link\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mainSite");
        echo "\">Strona Główna</a>
            </li>
            <li class=\"navbar-item\">
                <a class=\"nav-link\" href=\"#\">Link w budowie</a>
            </li>
            <li class=\"navbar-item\">
                <a class=\"nav-link\" href=\"#\">Link w budowie</a>
            </li>
            <li class=\"navbar-item\">
                <a class=\"nav-link\" href=\"#\">Link w budowie</a>
            </li>
            <li class=\"navbar-item\">
                <a class=\"nav-link\" href=\"#\">Link w budowie</a>
            </li>
            <li class=\"navbar-item\">
                <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appLogin");
        echo "\">Zaloguj</a>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_partials/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"nanbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <li class=\"navbar-item\">
                <a class=\"nav-link\" href=\"{{path('mainSite')}}\">Strona Główna</a>
            </li>
            <li class=\"navbar-item\">
                <a class=\"nav-link\" href=\"#\">Link w budowie</a>
            </li>
            <li class=\"navbar-item\">
                <a class=\"nav-link\" href=\"#\">Link w budowie</a>
            </li>
            <li class=\"navbar-item\">
                <a class=\"nav-link\" href=\"#\">Link w budowie</a>
            </li>
            <li class=\"navbar-item\">
                <a class=\"nav-link\" href=\"#\">Link w budowie</a>
            </li>
            <li class=\"navbar-item\">
                <a class=\"nav-link\" href=\"{{path('appLogin')}}\">Zaloguj</a>
            </li>
        </ul>
    </div>
</nav>", "_partials/menu.html.twig", "/var/www/markus/templates/_partials/menu.html.twig");
    }
}
