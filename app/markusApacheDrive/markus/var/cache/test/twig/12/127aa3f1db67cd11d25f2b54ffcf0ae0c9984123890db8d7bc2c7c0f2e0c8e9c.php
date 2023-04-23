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

/* teacher/marksClassAdd.twig */
class __TwigTemplate_8c3ec167a35f0e6f42a2ae38e31b81ae015c0d3cef77008b4d590168a92c85dd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "teacher/base.index.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher/marksClassAdd.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher/marksClassAdd.twig"));

        $this->parent = $this->loadTemplate("teacher/base.index.twig", "teacher/marksClassAdd.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Dodaj oceny - ";
        echo twig_escape_filter($this->env, (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " - Nauczyciel";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marksAddClass", ["id" => (isset($context["classId"]) || array_key_exists("classId", $context) ? $context["classId"] : (function () { throw new RuntimeError('Variable "classId" does not exist.', 6, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\" >
    <label for\"subject\">Przedmiot</label>
    <select class=\"form-select\" name=\"subject\" id=\"subject\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolSubject"]) || array_key_exists("schoolSubject", $context) ? $context["schoolSubject"] : (function () { throw new RuntimeError('Variable "schoolSubject" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 10
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </select><br/>
    <label for=\"weight\">Waga</label>
    <input  class=\"form-control\" type=\"number\" name=\"weight\" placeholder=\"5\" min=\"1\" max=\"99\" /><br/>
    <table class=\"table\">
        <thead><tr><th>Lp.</th><th>Imie i nazwisko</th><th>Oceny</th></tr></thead>
        ";
        // line 17
        $context["i"] = 1;
        // line 18
        echo "        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolClassList"]) || array_key_exists("schoolClassList", $context) ? $context["schoolClassList"] : (function () { throw new RuntimeError('Variable "schoolClassList" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 20
            echo "        <tr><td>";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "surname", [], "any", false, false, false, 20), "html", null, true);
            echo "</td><td><input  class=\"form-control\" type=\"text\" name=\"student[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "]\" placeholder=\"3+,5-,4\" /></td></tr>
        ";
            // line 21
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 21, $this->source); })()) + 1);
            // line 22
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>
    
    <input type=\"submit\" class=\"form-control\"  value=\"Dodaj Oceny\" />
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "teacher/marksClassAdd.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 23,  141 => 22,  139 => 21,  128 => 20,  124 => 19,  121 => 18,  119 => 17,  112 => 12,  101 => 10,  97 => 9,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"teacher/base.index.twig\" %}

{% block title %} Dodaj oceny - {{className}} - Nauczyciel{% endblock %}

{% block body %}
    <form action=\"{{path('marksAddClass',{id:classId})}}\" method=\"post\" >
    <label for\"subject\">Przedmiot</label>
    <select class=\"form-select\" name=\"subject\" id=\"subject\">
    {% for v in schoolSubject %}
        <option value=\"{{v.id}}\">{{v.name}}</option>
    {% endfor %}
    </select><br/>
    <label for=\"weight\">Waga</label>
    <input  class=\"form-control\" type=\"number\" name=\"weight\" placeholder=\"5\" min=\"1\" max=\"99\" /><br/>
    <table class=\"table\">
        <thead><tr><th>Lp.</th><th>Imie i nazwisko</th><th>Oceny</th></tr></thead>
        {% set i = 1 %}
        <tbody>
        {% for v in schoolClassList %}
        <tr><td>{{i}}</td><td>{{v.name}} {{v.surname}}</td><td><input  class=\"form-control\" type=\"text\" name=\"student[{{v.id}}]\" placeholder=\"3+,5-,4\" /></td></tr>
        {% set i = i + 1 %}
        {% endfor %}
        </tbody>
    </table>
    
    <input type=\"submit\" class=\"form-control\"  value=\"Dodaj Oceny\" />
    </form>
{% endblock %}", "teacher/marksClassAdd.twig", "/var/www/markus/templates/teacher/marksClassAdd.twig");
    }
}
