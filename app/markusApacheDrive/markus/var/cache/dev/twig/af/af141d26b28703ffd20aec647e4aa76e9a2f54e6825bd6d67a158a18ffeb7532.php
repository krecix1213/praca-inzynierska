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

/* mainSite/loginForm.twig */
class __TwigTemplate_4075375e1bb816105ef324dbf54c4066f7bf59052b88f33ddb238b6a4d3afc28 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mainSite/loginForm.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mainSite/loginForm.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<body>

<h1>Markus.pl</h1>
";
        // line 6
        $this->loadTemplate("_partials/menu.html.twig", "mainSite/loginForm.twig", 6)->display($context);
        // line 7
        echo "
<form action=";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loginPost");
        echo " method=\"POST\">
    <input type=\"text\" name=\"L0gin\" placeholder=\"Login...\" />
    <input type=\"password\" name=\"P@ssword\" placeholder=\"Hasło...\" />
    <input type=\"submit\" value=\"Zaloguj\" />
</form>

</body>
</html> ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "mainSite/loginForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<body>

<h1>Markus.pl</h1>
{% include \"_partials/menu.html.twig\" %}

<form action={{path('loginPost')}} method=\"POST\">
    <input type=\"text\" name=\"L0gin\" placeholder=\"Login...\" />
    <input type=\"password\" name=\"P@ssword\" placeholder=\"Hasło...\" />
    <input type=\"submit\" value=\"Zaloguj\" />
</form>

</body>
</html> ", "mainSite/loginForm.twig", "/var/www/markus/templates/mainSite/loginForm.twig");
    }
}
