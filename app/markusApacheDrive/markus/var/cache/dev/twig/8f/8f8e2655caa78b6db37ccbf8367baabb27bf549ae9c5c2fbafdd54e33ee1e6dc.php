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

/* mainSite.twig */
class __TwigTemplate_afdc8f5d86942d80aff17b37ad14ac71993177f91b1f0d42b35b3fd7a55fdbd5 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mainSite.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<body>

<h1>Markus.pl</h1>
<div>
    <nav>
        <li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_site");
        echo "\">Strona Główna</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Zaloguj</a></li>
    </nav>
</div>

</body>
</html> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "mainSite.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<body>

<h1>Markus.pl</h1>
<div>
    <nav>
        <li><a href=\"{{path('main_site')}}\">Strona Główna</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Zaloguj</a></li>
    </nav>
</div>

</body>
</html> ", "mainSite.twig", "/var/www/markus/templates/mainSite.twig");
    }
}
