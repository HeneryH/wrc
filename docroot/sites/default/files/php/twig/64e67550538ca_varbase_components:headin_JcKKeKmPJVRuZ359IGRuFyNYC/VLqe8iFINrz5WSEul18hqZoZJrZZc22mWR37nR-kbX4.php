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

/* varbase_components:heading */
class __TwigTemplate_0533b9c3912ae589828e4918e630546b extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--heading"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:heading"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:heading"));
        // line 24
        echo "
";
        // line 25
        $context["html_tag"] = (($context["html_tag"]) ?? ("h1"));
        // line 26
        $context["display"] = (((true &&  !(null === [($context["display"] ?? null)]))) ? ([($context["display"] ?? null)]) : ([]));
        // line 27
        $context["utility_classes"] = (($context["utility_classes"]) ?? ([]));
        // line 28
        echo "
";
        // line 29
        $context["classes"] = twig_array_merge(twig_array_merge([], $this->sandbox->ensureToStringAllowed(($context["display"] ?? null), 29, $this->source)), $this->sandbox->ensureToStringAllowed(($context["utility_classes"] ?? null), 29, $this->source));
        // line 30
        echo "
<";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null), 31, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 31, $this->source), "html", null, true);
        echo "</";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null), 31, $this->source), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "varbase_components:heading";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 31,  57 => 30,  55 => 29,  52 => 28,  50 => 27,  48 => 26,  46 => 25,  43 => 24,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:heading", "modules/contrib/varbase_components/components/atoms/heading/heading.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 25);
        static $filters = array("merge" => 29, "escape" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
