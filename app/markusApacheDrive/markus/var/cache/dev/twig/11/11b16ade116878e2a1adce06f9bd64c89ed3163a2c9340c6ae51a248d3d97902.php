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

/* student/marks.html.twig */
class __TwigTemplate_a41b5e6173916e5ff3196093eb6fbbb73c8265b21d7150bdf3ac6909e8c5d0b0 extends \Twig\Template
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
        return "student/base.index.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/marks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/marks.html.twig"));

        $this->parent = $this->loadTemplate("student/base.index.twig", "student/marks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "Twoje Oceny:

<table>
<tr><th>Przedmiot</th><th>Oceny</th><th>Srednia z ocen</th></tr>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marks"]) || array_key_exists("marks", $context) ? $context["marks"] : (function () { throw new RuntimeError('Variable "marks" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 9
            echo "<tr>
    <td><b>";
            // line 10
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</b></td>
    <td>
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["_key"] => $context["valueM"]) {
                // line 13
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marksStudentId", ["id" => twig_get_attribute($this->env, $this->source, $context["valueM"], "id", [], "any", false, false, false, 13)]), "html", null, true);
                echo "\" target=\"_blank\">";
                // line 14
                echo "            <div class=\"marks\">
                ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valueM"], "marks", [], "any", false, false, false, 15), "html", null, true);
                echo "
                <span class=\"marksTooltip\">
                    Skrot: ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valueM"], "subjectShortcut", [], "any", false, false, false, 17), "html", null, true);
                echo " <br />
                    Waga: ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valueM"], "weight", [], "any", false, false, false, 18), "html", null, true);
                echo " <br />
                    Nauczyciel: ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["valueM"], "teacher", [], "any", false, false, false, 19), "html", null, true);
                echo "
                </span>
            </div>
        </a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valueM'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["marksAvg"]) || array_key_exists("marksAvg", $context) ? $context["marksAvg"] : (function () { throw new RuntimeError('Variable "marksAvg" does not exist.', 24, $this->source); })()), $context["key"], [], "array", false, false, false, 24), "html", null, true);
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "student/marks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 27,  121 => 24,  110 => 19,  106 => 18,  102 => 17,  97 => 15,  94 => 14,  90 => 13,  86 => 12,  81 => 10,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"student/base.index.twig\" %}

{% block body %}
Twoje Oceny:

<table>
<tr><th>Przedmiot</th><th>Oceny</th><th>Srednia z ocen</th></tr>
{% for key,value in marks %}
<tr>
    <td><b>{{key}}</b></td>
    <td>
    {% for valueM in value %}
        <a href=\"{{path('marksStudentId', {id:valueM.id})}}\" target=\"_blank\">{# TODO do nowego okna#}
            <div class=\"marks\">
                {{valueM.marks}}
                <span class=\"marksTooltip\">
                    Skrot: {{valueM.subjectShortcut}} <br />
                    Waga: {{valueM.weight}} <br />
                    Nauczyciel: {{valueM.teacher}}
                </span>
            </div>
        </a>
    {% endfor %}
    <td>{{marksAvg[key]}}</td>
</tr>
{% endfor %}
</table>
{% endblock %}", "student/marks.html.twig", "/var/www/markus/templates/student/marks.html.twig");
    }
}
