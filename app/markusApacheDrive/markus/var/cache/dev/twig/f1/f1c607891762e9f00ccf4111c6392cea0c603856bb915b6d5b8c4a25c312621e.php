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

/* _partials/marksWeigth.html.twig */
class __TwigTemplate_28f3f95ca3868a18cc85a26e99e1eb3025f3d0fc35bdb4f37ea0c1e1a0bc74dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/marksWeigth.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/marksWeigth.html.twig"));

        // line 1
        echo "<style>
.marks{
  position: relative;
  display: inline-block;
  border:1px #000 solid;
  margin:0 20px;
  width:35px;
  text-align:center;
  color:#000;
}

.marks .marksTooltip {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.marks .marksTooltip::after {
  content: \"\";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.marks:hover .marksTooltip {
  visibility: visible;
  opacity: 1;
}
.weight1{
    background-color:#e0a98d;
}
.weight2{
    background-color:#017a3d;
}
.weight3{
    background-color:#e892eb;
}
.weight4{
    background-color:#8eb6d8;
}
.weight5{
    background-color:#a7f75f;
}
.weight6{
    background-color:#9d9a3d;
}
</style>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_partials/marksWeigth.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
.marks{
  position: relative;
  display: inline-block;
  border:1px #000 solid;
  margin:0 20px;
  width:35px;
  text-align:center;
  color:#000;
}

.marks .marksTooltip {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.marks .marksTooltip::after {
  content: \"\";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.marks:hover .marksTooltip {
  visibility: visible;
  opacity: 1;
}
.weight1{
    background-color:#e0a98d;
}
.weight2{
    background-color:#017a3d;
}
.weight3{
    background-color:#e892eb;
}
.weight4{
    background-color:#8eb6d8;
}
.weight5{
    background-color:#a7f75f;
}
.weight6{
    background-color:#9d9a3d;
}
</style>", "_partials/marksWeigth.html.twig", "/var/www/markus/templates/_partials/marksWeigth.html.twig");
    }
}
