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

/* varbase_components:card-impressed */
class __TwigTemplate_278520d79066236bb6f3965f32efd51e extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--card-impressed"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:card-impressed"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:card-impressed"));
        // line 22
        echo "
";
        // line 23
        $context["style_size"] = ((($context["style_size"] ?? null)) ? ([($context["style_size"] ?? null)]) : ([]));
        // line 24
        $context["media_position"] = (((($context["media_position"] ?? null) == "bottom")) ? (["flex-column-reverse"]) : ([]));
        // line 25
        $context["utility_classes"] = ((($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([]));
        // line 26
        $context["media_utility_classes"] = ((($context["media_utility_classes"] ?? null)) ? (($context["media_utility_classes"] ?? null)) : ([]));
        // line 27
        $context["content_utility_classes"] = ((($context["content_utility_classes"] ?? null)) ? (($context["content_utility_classes"] ?? null)) : ([]));
        // line 28
        echo "
";
        // line 30
        $context["card_border"] = ((($context["card_border"] ?? null)) ? (["bordered"]) : (["border-0"]));
        // line 31
        echo "
";
        // line 33
        $context["equal_height"] = ((($context["equal_height"] ?? null)) ? (["h-100"]) : ([]));
        // line 34
        echo "
";
        // line 36
        $context["anchor_all"] = ((($context["anchor_all"] ?? null)) ? (["anchor-all"]) : ([]));
        // line 37
        echo "
";
        // line 39
        $context["card_classes"] = twig_array_merge(twig_array_merge(twig_array_merge(twig_array_merge(twig_array_merge(twig_array_merge(["card", "varbase-impressed-card"], $this->sandbox->ensureToStringAllowed(        // line 42
($context["style_size"] ?? null), 42, $this->source)), $this->sandbox->ensureToStringAllowed(($context["card_border"] ?? null), 42, $this->source)), $this->sandbox->ensureToStringAllowed(($context["equal_height"] ?? null), 42, $this->source)), $this->sandbox->ensureToStringAllowed(($context["anchor_all"] ?? null), 42, $this->source)), $this->sandbox->ensureToStringAllowed(($context["media_position"] ?? null), 42, $this->source)), $this->sandbox->ensureToStringAllowed(($context["utility_classes"] ?? null), 42, $this->source));
        // line 44
        echo "
";
        // line 46
        $context["media_classes"] = twig_array_merge([], $this->sandbox->ensureToStringAllowed(($context["media_utility_classes"] ?? null), 46, $this->source));
        // line 48
        echo "
";
        // line 50
        $context["content_classes"] = twig_array_merge(["impressed-card-content", "card-body"], $this->sandbox->ensureToStringAllowed(        // line 53
($context["content_utility_classes"] ?? null), 53, $this->source));
        // line 55
        echo "
";
        // line 56
        if ( !($context["card_attributes"] ?? null)) {
            // line 57
            echo "  ";
            $context["card_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        }
        // line 59
        echo "
";
        // line 60
        if ( !($context["content_attributes"] ?? null)) {
            // line 61
            echo "  ";
            $context["content_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        }
        // line 63
        echo "
<div";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["card_attributes"] ?? null), "addClass", [($context["card_classes"] ?? null)], "method", false, false, true, 64), 64, $this->source), "html", null, true);
        echo ">
  ";
        // line 65
        if ( !twig_test_empty(($context["media_classes"] ?? null))) {
            // line 66
            echo "    ";
            if ( !($context["media_attributes"] ?? null)) {
                // line 67
                echo "      ";
                $context["media_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                // line 68
                echo "    ";
            }
            // line 69
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["media_attributes"] ?? null), "addClass", [($context["media_classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
            echo ">
  ";
        }
        // line 71
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media"] ?? null), 71, $this->source), "html", null, true);
        echo "
  ";
        // line 72
        if ( !twig_test_empty(($context["media_classes"] ?? null))) {
            // line 73
            echo "    </div>
  ";
        }
        // line 75
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_classes"] ?? null)], "method", false, false, true, 75), 75, $this->source), "html", null, true);
        echo ">
    ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 76, $this->source), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "varbase_components:card-impressed";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 76,  141 => 75,  137 => 73,  135 => 72,  130 => 71,  124 => 69,  121 => 68,  118 => 67,  115 => 66,  113 => 65,  109 => 64,  106 => 63,  102 => 61,  100 => 60,  97 => 59,  93 => 57,  91 => 56,  88 => 55,  86 => 53,  85 => 50,  82 => 48,  80 => 46,  77 => 44,  75 => 42,  74 => 39,  71 => 37,  69 => 36,  66 => 34,  64 => 33,  61 => 31,  59 => 30,  56 => 28,  54 => 27,  52 => 26,  50 => 25,  48 => 24,  46 => 23,  43 => 22,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:card-impressed", "modules/contrib/varbase_components/components/organisms/card-impressed/card-impressed.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "if" => 56);
        static $filters = array("merge" => 42, "escape" => 64);
        static $functions = array("create_attribute" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'escape'],
                ['create_attribute']
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
