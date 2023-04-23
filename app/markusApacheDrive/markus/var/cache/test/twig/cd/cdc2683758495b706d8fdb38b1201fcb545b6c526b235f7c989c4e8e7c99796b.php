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

/* student/_partials/menu.html.twig */
class __TwigTemplate_ae7d77e1583bdfa6f995fa89d24274471126561b8491acc64379047f9727f74f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/_partials/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/_partials/menu.html.twig"));

        // line 1
        echo "<nav class=\"nanbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <li class=\"navbar-item\">
                <a class=\"nav-link\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mainPageStudent");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appLogout");
        echo "\">Wyloguj</a>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "student/_partials/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"nanbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <li class=\"navbar-item\">
                <a class=\"nav-link\" href=\"{{path('mainPageStudent')}}\">Strona Główna</a>
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
                <a class=\"nav-link\" href=\"{{path('appLogout')}}\">Wyloguj</a>
            </li>
        </ul>
    </div>
</nav>", "student/_partials/menu.html.twig", "/var/www/markus/templates/student/_partials/menu.html.twig");
    }
}
