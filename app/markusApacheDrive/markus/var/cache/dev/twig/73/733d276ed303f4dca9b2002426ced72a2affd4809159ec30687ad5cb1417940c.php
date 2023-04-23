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

/* mainSite/contact.twig */
class __TwigTemplate_2c6f184a4ac3cbeada81360f951ce612fc87e38b2fd512c6ac5db86779960a57 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mainSite/contact.twig"));

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
        $this->loadTemplate("_partials/menu.html.twig", "mainSite/contact.twig", 11)->display($context);
        // line 12
        echo "</header>

<section>
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 15, $this->source); })()), 'form');
        echo "
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
        return "mainSite/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  54 => 12,  52 => 11,  40 => 1,);
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

<section>
    {{form(emailForm)}}
</section>

<footer>
    <p>Markus.pl by <a href=\"mailto:jakub.magiera@edu.wsti.pl\">Jakub Magiera</a></p>
</footer>
</body>
</html> ", "mainSite/contact.twig", "/var/www/markus/templates/mainSite/contact.twig");
    }
}
