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

/* admin/studentEditPerson.html.twig */
class __TwigTemplate_d48678c23d1e8cdabc12045303f50857242d44b3372e6e6b9b2655cd38a03bd0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/studentEditPerson.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/studentEditPerson.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/studentEditPerson.html.twig", 1);
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
        echo "    <form class=\"m-4\">
        <label for=\"Name\">Imię</label>
        <input class=\"form-control\" type=\"text\" id=\"Name\" name=\"Name\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "\" /><br />

        <label for=\"Surname\">Nazwisko</label>
        <input class=\"form-control\" id=\"Surname\" type=\"text\" name=\"Surname\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 9, $this->source); })()), "surname", [], "any", false, false, false, 9), "html", null, true);
        echo "\" /><br />

        <label for=\"Telephone\">Telefon</label>
        <input class=\"form-control\" id=\"Telephone\" type=\"tel\" name=\"Telephone\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 12, $this->source); })()), "telephone", [], "any", false, false, false, 12), "html", null, true);
        echo "\" /><br />

        <label for=\"email\">Email</label>
        <input class=\"form-control\" id=\"email\" type=\"email\" name=\"Email\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), "html", null, true);
        echo "\" /><br />

        <label for=\"nig\">PESEL</label>
        <input class=\"form-control\" id=\"nig\" type=\"number\" name=\"NIG\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 18, $this->source); })()), "NumberIdentGoverment", [], "any", false, false, false, 18), "html", null, true);
        echo "\" /><br />

        <label for=\"class\">Klasa</label>
        <select class=\"form-select\" id=\"class\" name=\"class\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classList"]) || array_key_exists("classList", $context) ? $context["classList"] : (function () { throw new RuntimeError('Variable "classList" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 23
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "symbol", [], "any", false, false, false, 23), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </select><br />

        <input class=\"form-control\" type=\"submit\" value=\"Zapisz\" />
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/studentEditPerson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  107 => 23,  103 => 22,  96 => 18,  90 => 15,  84 => 12,  78 => 9,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}

{% block body %}
    <form class=\"m-4\">
        <label for=\"Name\">Imię</label>
        <input class=\"form-control\" type=\"text\" id=\"Name\" name=\"Name\" value=\"{{student.name}}\" /><br />

        <label for=\"Surname\">Nazwisko</label>
        <input class=\"form-control\" id=\"Surname\" type=\"text\" name=\"Surname\" value=\"{{student.surname}}\" /><br />

        <label for=\"Telephone\">Telefon</label>
        <input class=\"form-control\" id=\"Telephone\" type=\"tel\" name=\"Telephone\" value=\"{{student.telephone}}\" /><br />

        <label for=\"email\">Email</label>
        <input class=\"form-control\" id=\"email\" type=\"email\" name=\"Email\" value=\"{{student.email}}\" /><br />

        <label for=\"nig\">PESEL</label>
        <input class=\"form-control\" id=\"nig\" type=\"number\" name=\"NIG\" value=\"{{student.NumberIdentGoverment}}\" /><br />

        <label for=\"class\">Klasa</label>
        <select class=\"form-select\" id=\"class\" name=\"class\">
        {% for v in classList %}
            <option value=\"{{v.id}}\">{{v.symbol}}</option>
        {% endfor %}
        </select><br />

        <input class=\"form-control\" type=\"submit\" value=\"Zapisz\" />
    </form>
{% endblock %}", "admin/studentEditPerson.html.twig", "/var/www/markus/templates/admin/studentEditPerson.html.twig");
    }
}
