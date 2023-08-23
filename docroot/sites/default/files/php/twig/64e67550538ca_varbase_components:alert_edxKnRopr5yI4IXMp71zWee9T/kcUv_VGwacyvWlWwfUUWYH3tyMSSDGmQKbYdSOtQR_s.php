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

/* varbase_components:alert */
class __TwigTemplate_452d5e44336d2adea43718476e002af3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--alert"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:alert"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:alert"));
        // line 13
        $context["utility_classes"] = ((($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([]));
        // line 14
        echo "
";
        // line 15
        $context["dismissible"] = (($context["dismissible"]) ?? (true));
        // line 16
        $context["classes"] = twig_array_merge(["alert", ((        // line 18
$context["type"]) ?? ("alert-primary")), ((        // line 19
($context["dismissible"] ?? null)) ? ("alert-dismissible") : (""))], $this->sandbox->ensureToStringAllowed(        // line 20
($context["utility_classes"] ?? null), 20, $this->source));
        // line 21
        echo "
<div";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        echo " role=\"alert\">
\t";
        // line 23
        if (($context["heading"] ?? null)) {
            // line 24
            echo "\t\t<h4 class=\"alert-heading\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 24, $this->source), "html", null, true);
            echo "</h4>
\t";
        }
        // line 26
        echo "
\t";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "
\t";
        // line 31
        if (($context["dismissible"] ?? null)) {
            // line 32
            echo "    <button type=\"button\" class=\"btn btn-close btn-sm\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t";
        }
        // line 34
        echo "</div>

";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 28, $this->source), "html", null, true);
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "varbase_components:alert";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  91 => 27,  85 => 34,  81 => 32,  79 => 31,  76 => 30,  74 => 27,  71 => 26,  65 => 24,  63 => 23,  59 => 22,  56 => 21,  54 => 20,  53 => 19,  52 => 18,  51 => 16,  49 => 15,  46 => 14,  44 => 13,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:alert", "modules/contrib/varbase_components/components/molecules/alert/alert.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "if" => 23, "block" => 27);
        static $filters = array("merge" => 20, "escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['merge', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
