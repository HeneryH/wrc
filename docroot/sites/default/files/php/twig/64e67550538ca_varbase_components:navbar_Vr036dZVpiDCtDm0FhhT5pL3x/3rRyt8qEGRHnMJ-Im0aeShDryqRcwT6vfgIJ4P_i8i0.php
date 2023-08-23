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

/* varbase_components:navbar */
class __TwigTemplate_d8301645e5c953d8ec65899312fcbfc1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'branding' => [$this, 'block_branding'],
            'navigation' => [$this, 'block_navigation'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--navbar"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:navbar"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:navbar"));
        // line 20
        echo "
";
        // line 21
        $context["container"] = (($context["container"]) ?? (false));
        // line 22
        $context["placement"] = (($context["placement"]) ?? (""));
        // line 23
        $context["color"] = (($context["color"]) ?? ("light"));
        // line 24
        $context["navbar_expand"] = (($context["navbar_expand"]) ?? ("lg"));
        // line 25
        $context["utility_classes"] = ((($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([]));
        // line 26
        echo "
";
        // line 28
        $context["classes"] = twig_array_merge(["navbar", ("navbar-expand-" . $this->sandbox->ensureToStringAllowed(        // line 30
($context["navbar_expand"] ?? null), 30, $this->source)), "justify-content-between", ("navbar-" . $this->sandbox->ensureToStringAllowed(        // line 32
($context["color"] ?? null), 32, $this->source)), ("bg-" . $this->sandbox->ensureToStringAllowed(        // line 33
($context["color"] ?? null), 33, $this->source)),         // line 34
($context["placement"] ?? null)], $this->sandbox->ensureToStringAllowed(        // line 35
($context["utility_classes"] ?? null), 35, $this->source));
        // line 37
        echo "
<nav";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
        echo ">
  ";
        // line 39
        if (($context["container"] ?? null)) {
            // line 40
            echo "    <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 40, $this->source), "html", null, true);
            echo "\">
  ";
        }
        // line 42
        echo "
  ";
        // line 43
        $this->displayBlock('branding', $context, $blocks);
        // line 46
        echo "
  <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\".navbar-collapse\" aria-controls=\"navbar-collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\">
    ";
        // line 52
        $this->displayBlock('navigation', $context, $blocks);
        // line 55
        echo "  </div>

  ";
        // line 57
        if (($context["container"] ?? null)) {
            // line 58
            echo "    </div>
  ";
        }
        // line 60
        echo "</nav>
";
    }

    // line 43
    public function block_branding($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["branding"] ?? null), 44, $this->source), "html", null, true);
        echo "
  ";
    }

    // line 52
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navigation"] ?? null), 53, $this->source), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "varbase_components:navbar";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 53,  124 => 52,  117 => 44,  113 => 43,  108 => 60,  104 => 58,  102 => 57,  98 => 55,  96 => 52,  88 => 46,  86 => 43,  83 => 42,  77 => 40,  75 => 39,  71 => 38,  68 => 37,  66 => 35,  65 => 34,  64 => 33,  63 => 32,  62 => 30,  61 => 28,  58 => 26,  56 => 25,  54 => 24,  52 => 23,  50 => 22,  48 => 21,  45 => 20,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:navbar", "modules/contrib/varbase_components/components/organisms/navbar/navbar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "if" => 39, "block" => 43);
        static $filters = array("merge" => 35, "escape" => 38);
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
