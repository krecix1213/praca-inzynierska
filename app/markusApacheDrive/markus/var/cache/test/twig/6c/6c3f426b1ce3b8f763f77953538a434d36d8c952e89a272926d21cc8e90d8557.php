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

/* mainSite/mainSite.twig */
class __TwigTemplate_dafe92ffe8525b4b6be0b1614781813e982f096c00034dc6d1cdfb87079ef28d extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mainSite/mainSite.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/bootstrap.min.css\" />
</head>

<body>

<header>
    <h1>Markus.pl</h1>
    ";
        // line 11
        $this->loadTemplate("_partials/menu.html.twig", "mainSite/mainSite.twig", 11)->display($context);
        // line 12
        echo "</header>

<section id=\"slider\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <p>Moduly</p>
                <ul>
                    <li>Dziennik szkolny</li>
                    <li>Zadania</li>
                    <li>Obiadkowo</li>
                    <li>Planer Zajec</li>
                    <li>Modul Bezpieczenstwa</li>
                </ul>    
            </div>
            <div class=\"col\">
                <p>Zalety Dla Ucznia</p>
                <ul>
                    <li>Tak o</li>
                    <li>Braj o</li>
                    <li>afsdasd o</li>
                </ul>
            </div>
            <div class=\"col\">
                <p>Zalety Dla Szkoly</p>
                    <ul>
                        <li>Tak o</li>
                        <li>Braj o</li>
                        <li>afsdasd o</li>
                    </ul>
            </div>
        </div>
    </div>
</section>

<footer>
    <p>Markus.pl by <a href=\"mailto:jakub.magiera@edu.wsti.pl\">Jakub Magiera</a></p>
</footer>
</body>
</html> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "mainSite/mainSite.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/bootstrap.min.css\" />
</head>

<body>

<header>
    <h1>Markus.pl</h1>
    {% include \"_partials/menu.html.twig\" %}
</header>

<section id=\"slider\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <p>Moduly</p>
                <ul>
                    <li>Dziennik szkolny</li>
                    <li>Zadania</li>
                    <li>Obiadkowo</li>
                    <li>Planer Zajec</li>
                    <li>Modul Bezpieczenstwa</li>
                </ul>    
            </div>
            <div class=\"col\">
                <p>Zalety Dla Ucznia</p>
                <ul>
                    <li>Tak o</li>
                    <li>Braj o</li>
                    <li>afsdasd o</li>
                </ul>
            </div>
            <div class=\"col\">
                <p>Zalety Dla Szkoly</p>
                    <ul>
                        <li>Tak o</li>
                        <li>Braj o</li>
                        <li>afsdasd o</li>
                    </ul>
            </div>
        </div>
    </div>
</section>

<footer>
    <p>Markus.pl by <a href=\"mailto:jakub.magiera@edu.wsti.pl\">Jakub Magiera</a></p>
</footer>
</body>
</html> ", "mainSite/mainSite.twig", "/var/www/markus/templates/mainSite/mainSite.twig");
    }
}
