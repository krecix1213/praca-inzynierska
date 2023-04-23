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

/* admin/absenceEdit.html.twig */
class __TwigTemplate_5cd651633fc1468602e66c3f8345f16181498ed147aa1fa0b6a02b329947194e extends \Twig\Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/absenceEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/absenceEdit.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/absenceEdit.html.twig", 1);
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

        echo " Sprawdz nieobcecności - ";
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
        echo "<form>

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new RuntimeError('Variable "absence" does not exist.', 8, $this->source); })()), "json", [], "any", false, false, false, 8), "students", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 9
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "surname", [], "any", false, false, false, 9), "html", null, true);
            echo " <input type=\"checkbox\" name=\"student[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 9), (isset($context["studentListId"]) || array_key_exists("studentListId", $context) ? $context["studentListId"] : (function () { throw new RuntimeError('Variable "studentListId" does not exist.', 9, $this->source); })()))) {
                echo "checked";
            }
            echo " /><br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "<hr />
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lessonList"]) || array_key_exists("lessonList", $context) ? $context["lessonList"] : (function () { throw new RuntimeError('Variable "lessonList" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo " <input type=\"radio\" name=\"lesson\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 13) == twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new RuntimeError('Variable "absence" does not exist.', 13, $this->source); })()), "lesson", [], "any", false, false, false, 13))) {
                echo "checked";
            }
            echo " /><br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<hr />
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teacherList"]) || array_key_exists("teacherList", $context) ? $context["teacherList"] : (function () { throw new RuntimeError('Variable "teacherList" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 17
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "surname", [], "any", false, false, false, 17), "html", null, true);
            echo " <input type=\"radio\" name=\"teacher\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 17) == twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new RuntimeError('Variable "absence" does not exist.', 17, $this->source); })()), "teacher", [], "any", false, false, false, 17))) {
                echo "checked";
            }
            echo " /><br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
<input type=\"date\" name=\"data\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new RuntimeError('Variable "absence" does not exist.', 20, $this->source); })()), "date", [], "any", false, false, false, 20), "html", null, true);
        echo "\" />

";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 22, $this->source); })()), "timesJson", [], "any", false, false, false, 22), "godziny", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 23
            echo "     ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "rozpoczecie", [], "any", false, false, false, 23), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "koniec", [], "any", false, false, false, 23), "html", null, true);
            echo "<input type=\"radio\" name=\"teacher\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "rozpoczecie", [], "any", false, false, false, 23), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["v"], "rozpoczecie", [], "any", false, false, false, 23) == twig_get_attribute($this->env, $this->source, (isset($context["absence"]) || array_key_exists("absence", $context) ? $context["absence"] : (function () { throw new RuntimeError('Variable "absence" does not exist.', 23, $this->source); })()), "hour", [], "any", false, false, false, 23))) {
                echo "checked";
            }
            echo " /><br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/absenceEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 25,  172 => 23,  168 => 22,  163 => 20,  160 => 19,  143 => 17,  139 => 16,  136 => 15,  121 => 13,  117 => 12,  114 => 11,  97 => 9,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}

{% block title %} Sprawdz nieobcecności - {#{{className}}#} - Nauczyciel{% endblock %}

{% block body %}
<form>

{% for v in absence.json.students %}
    {{v.name}} {{v.surname}} <input type=\"checkbox\" name=\"student[]\" value=\"{{v.id}}\" {% if v.id in studentListId %}checked{% endif %} /><br />
{% endfor %}
<hr />
{% for v in lessonList %}
    {{v.name}} <input type=\"radio\" name=\"lesson\" value=\"{{v.id}}\" {% if v.id == absence.lesson %}checked{% endif %} /><br />
{% endfor %}
<hr />
{% for v in teacherList %}
    {{v.name}} {{v.surname}} <input type=\"radio\" name=\"teacher\" value=\"{{v.id}}\" {% if v.id == absence.teacher %}checked{% endif %} /><br />
{% endfor %}

<input type=\"date\" name=\"data\" value=\"{{absence.date}}\" />

{% for v in hours.timesJson.godziny %}
     {{v.rozpoczecie}} - {{v.koniec}}<input type=\"radio\" name=\"teacher\" value=\"{{v.rozpoczecie}}\" {% if v.rozpoczecie == absence.hour %}checked{% endif %} /><br />
{% endfor %}
</form>
{% endblock %}", "admin/absenceEdit.html.twig", "/var/www/markus/templates/admin/absenceEdit.html.twig");
    }
}
