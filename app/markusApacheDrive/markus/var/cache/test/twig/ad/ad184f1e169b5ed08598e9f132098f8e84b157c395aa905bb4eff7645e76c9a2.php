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

/* teacher/absenceAdd.html.twig */
class __TwigTemplate_70533a552eb96b4d22ab69da88d885d6f22e0b2dc6b3eeac1cdb84e2bc4f4320 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher/absenceAdd.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher/absenceAdd.html.twig"));

        $this->parent = $this->loadTemplate("teacher/base.index.twig", "teacher/absenceAdd.html.twig", 1);
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

        echo " Dodaj nieobecnosci - ";
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AbsenceAddTeacher", ["id" => (isset($context["classId"]) || array_key_exists("classId", $context) ? $context["classId"] : (function () { throw new RuntimeError('Variable "classId" does not exist.', 6, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\" >
        <label for\"subject\">Przedmiot</label>
        <select class=\"form-select\" name=\"subject\" id=\"subject\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolSubject"]) || array_key_exists("schoolSubject", $context) ? $context["schoolSubject"] : (function () { throw new RuntimeError('Variable "schoolSubject" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 10
            echo "            <option value=\"";
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
        echo "        </select><br/>
        <label for\"date\">Data</label>
        <input type=\"date\" name=\"date\" required/>
        <select class=\"form-select\" name=\"dateHours\" id=\"dateHours\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 17
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </select><br/>
        <table class=\"table\">
            <thead><tr><th>Lp.</th><th>Imie i Nazwisko</th><th>OB<th>NB</th><th>SP</th></tr></thead>
            <tbody>
            ";
        // line 23
        $context["i"] = 1;
        // line 24
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schoolClassList"]) || array_key_exists("schoolClassList", $context) ? $context["schoolClassList"] : (function () { throw new RuntimeError('Variable "schoolClassList" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 25
            echo "                <tr><td>";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "surname", [], "any", false, false, false, 25), "html", null, true);
            echo "</td><td><input type=\"checkbox\" name=\"student[OB][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "]\"/></td><td><input type=\"checkbox\" name=\"student[NB][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "]\"/></td><td><input type=\"checkbox\" name=\"student[SP][";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "]\"/></td></tr>
            ";
            // line 26
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 26, $this->source); })()) + 1);
            // line 27
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </tbody>
        </table>
        <input type=\"submit\" class=\"form-control\" value=\"Dodaj nieobecnosci\" />
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "teacher/absenceAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 28,  163 => 27,  161 => 26,  146 => 25,  141 => 24,  139 => 23,  133 => 19,  122 => 17,  118 => 16,  112 => 12,  101 => 10,  97 => 9,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"teacher/base.index.twig\" %}

{% block title %} Dodaj nieobecnosci - {{className}} - Nauczyciel{% endblock %}

{% block body %}
    <form action=\"{{path('AbsenceAddTeacher',{id:classId})}}\" method=\"post\" >
        <label for\"subject\">Przedmiot</label>
        <select class=\"form-select\" name=\"subject\" id=\"subject\">
        {% for v in schoolSubject %}
            <option value=\"{{v.id}}\">{{v.name}}</option>
        {% endfor %}
        </select><br/>
        <label for\"date\">Data</label>
        <input type=\"date\" name=\"date\" required/>
        <select class=\"form-select\" name=\"dateHours\" id=\"dateHours\">
        {% for v in hours %}
            <option value=\"{{v}}\">{{v}}</option>
        {% endfor %}
        </select><br/>
        <table class=\"table\">
            <thead><tr><th>Lp.</th><th>Imie i Nazwisko</th><th>OB<th>NB</th><th>SP</th></tr></thead>
            <tbody>
            {% set i = 1 %}
            {% for v in schoolClassList %}
                <tr><td>{{i}}</td><td>{{v.name}} {{v.surname}}</td><td><input type=\"checkbox\" name=\"student[OB][{{v.id}}]\"/></td><td><input type=\"checkbox\" name=\"student[NB][{{v.id}}]\"/></td><td><input type=\"checkbox\" name=\"student[SP][{{v.id}}]\"/></td></tr>
            {% set i = i + 1 %}
            {% endfor %}
            </tbody>
        </table>
        <input type=\"submit\" class=\"form-control\" value=\"Dodaj nieobecnosci\" />
    </form>
{% endblock %}", "teacher/absenceAdd.html.twig", "/var/www/markus/templates/teacher/absenceAdd.html.twig");
    }
}
