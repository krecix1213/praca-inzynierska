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
class __TwigTemplate_dd2fd94cf4f1031f253b2bb996e76be25a54af675cc16969de44a0fd0c47c201 extends \Twig\Template
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
        echo "<div>
    <nav>
        <li><a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_site");
        echo "\">Strona Główna</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Zaloguj</a></li>
    </nav>
</div>";
        
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
        return array (  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <nav>
        <li><a href=\"{{path('main_site')}}\">Strona Główna</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Link w budowie</a></li>
        <li><a href=\"#\">Zaloguj</a></li>
    </nav>
</div>", "_partials/menu.html.twig", "/var/www/markus/templates/_partials/menu.html.twig");
    }
}
