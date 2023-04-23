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

/* admin/marksClass.html.twig */
class __TwigTemplate_5e515c444a12de202bcd059f9a8ef3426cf4763cd79f1b0702a94c9010ddf007 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/marksClass.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/marksClass.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/marksClass.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->loadTemplate("_partials/marksWeigth.html.twig", "admin/marksClass.html.twig", 5)->display($context);
        // line 6
        echo "<table class=\"table\">
        <tr><th>Lp.</th><th>Imie i nazwisko Studenta</th><th>Oceny</th></tr>
        ";
        // line 8
        $context["i"] = 1;
        // line 9
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayMark"]) || array_key_exists("arrayMark", $context) ? $context["arrayMark"] : (function () { throw new RuntimeError('Variable "arrayMark" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 10
            echo "            <tr><td>";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</td>
            <td>
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["v"]);
            foreach ($context['_seq'] as $context["k"] => $context["m"]) {
                // line 13
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["m"]);
                foreach ($context['_seq'] as $context["_key"] => $context["valueM"]) {
                    // line 14
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("markEditPageAdmin", ["id" => twig_get_attribute($this->env, $this->source, $context["valueM"], "id", [], "any", false, false, false, 14)]), "html", null, true);
                    echo "\" target=\"_blank\">
                ";
                    // line 15
                    echo $this->extensions['App\Twig\CustomFunction']->marksContainer(twig_get_attribute($this->env, $this->source, $context["valueM"], "marks", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, $context["valueM"], "subjectShortcut", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, $context["valueM"], "weight", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, $context["valueM"], "teacher", [], "any", false, false, false, 15));
                    echo "</a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valueM'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            </td></tr>
            ";
            // line 19
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 19, $this->source); })()) + 1);
            // line 20
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/marksClass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 21,  122 => 20,  120 => 19,  117 => 18,  111 => 17,  103 => 15,  98 => 14,  93 => 13,  89 => 12,  81 => 10,  76 => 9,  74 => 8,  70 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}


{% block body %}
{% include \"_partials/marksWeigth.html.twig\" %}
<table class=\"table\">
        <tr><th>Lp.</th><th>Imie i nazwisko Studenta</th><th>Oceny</th></tr>
        {% set i = 1 %}
        {% for k,v in arrayMark %}
            <tr><td>{{i}}</td><td>{{k}}</td>
            <td>
            {% for k,m in v %}
            {% for valueM in m %}
                <a href=\"{{path('markEditPageAdmin', {id:valueM.id})}}\" target=\"_blank\">
                {{marks(valueM.marks, valueM.subjectShortcut, valueM.weight, valueM.teacher)|raw}}</a>
            {% endfor %}
            {% endfor %}
            </td></tr>
            {% set i = i + 1%}
        {% endfor %}
</table>
{% endblock %}", "admin/marksClass.html.twig", "/var/www/markus/templates/admin/marksClass.html.twig");
    }
}
