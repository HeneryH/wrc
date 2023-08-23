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

/* varbase_components:input */
class __TwigTemplate_ebb9d654399d90ae7c5863c18b92c938 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--input"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:input"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:input"));
        // line 17
        echo "
";
        // line 18
        $context["bs_form_control"] = ((($context["bs_form_control"] ?? null)) ? (["form-control"]) : ([]));
        // line 19
        $context["bs_size"] = ((($context["bs_size"] ?? null)) ? ([($context["bs_size"] ?? null)]) : ([]));
        // line 20
        $context["utility_classes"] = (($context["utility_classes"]) ?? ([]));
        // line 21
        $context["classes"] = twig_array_merge(twig_array_merge([], $this->sandbox->ensureToStringAllowed(($context["bs_form_control"] ?? null), 21, $this->source)), twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bs_size"] ?? null), 21, $this->source), $this->sandbox->ensureToStringAllowed(($context["utility_classes"] ?? null), 21, $this->source)));
        // line 22
        echo "
";
        // line 24
        if (($context["type"] ?? null)) {
            // line 25
            echo "\t";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["type", ($context["type"] ?? null)], "method", false, false, true, 25);
        }
        // line 27
        echo "
";
        // line 29
        if (($context["value"] ?? null)) {
            // line 30
            echo "\t";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["value", ($context["value"] ?? null)], "method", false, false, true, 30);
        }
        // line 32
        echo "
";
        // line 34
        if (($context["placeholder"] ?? null)) {
            // line 35
            echo "\t";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["placeholder", ($context["placeholder"] ?? null)], "method", false, false, true, 35);
        }
        // line 37
        echo "
<input";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
        echo " />";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 38, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "varbase_components:input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 38,  81 => 37,  77 => 35,  75 => 34,  72 => 32,  68 => 30,  66 => 29,  63 => 27,  59 => 25,  57 => 24,  54 => 22,  52 => 21,  50 => 20,  48 => 19,  46 => 18,  43 => 17,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:input", "modules/contrib/varbase_components/components/atoms/input/input.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 18, "if" => 24);
        static $filters = array("merge" => 21, "escape" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
