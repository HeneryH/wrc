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

/* varbase_components:form-element */
class __TwigTemplate_b963045a508d7ac2430ca2c558fa089a extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--form-element"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:form-element"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:form-element"));
        // line 50
        $context["classes"] = ["js-form-item", "form-item", ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["type"] ?? null), 53, $this->source))), ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["name"] ?? null), 54, $this->source))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["name"] ?? null), 55, $this->source))), ((!twig_in_filter(        // line 56
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled disabled") : ("")), ((        // line 58
($context["errors"] ?? null)) ? ("form-item--error has-error") : ("")), "form-group"];
        // line 63
        $context["description_classes"] = ["description", "form-text", "text-muted", (((        // line 67
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 70
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 70), 70, $this->source), "html", null, true);
        echo ">
  ";
        // line 71
        if (twig_in_filter(($context["label_display"] ?? null), ["before", "invisible"])) {
            // line 72
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 72, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 74
        echo "
  ";
        // line 75
        if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
            // line 76
            echo "    <div class=\"input-group\">
  ";
        }
        // line 78
        echo "
  ";
        // line 79
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 80
            echo "    <span class=\"field-prefix input-group-text\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 80, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 82
        echo "
  ";
        // line 83
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 83))) {
            // line 84
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo ">
      ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 88
        echo "
  ";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 89, $this->source), "html", null, true);
        echo "

  ";
        // line 91
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 92
            echo "    <span class=\"field-suffix input-group-text\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 92, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 94
        echo "
  ";
        // line 95
        if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
            // line 96
            echo "    </div>
  ";
        }
        // line 98
        echo "
  ";
        // line 99
        if ((($context["label_display"] ?? null) == "after")) {
            // line 100
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 100, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 102
        echo "
  ";
        // line 103
        if (($context["errors"] ?? null)) {
            // line 104
            echo "    <div class=\"invalid-feedback\">
      ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 105, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 108
        echo "
  ";
        // line 109
        if ((twig_in_filter(($context["description_display"] ?? null), ["after", "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 109))) {
            // line 110
            echo "    <small";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 110), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 110), 110, $this->source), "html", null, true);
            echo ">
      ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
    </small>
  ";
        }
        // line 114
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "varbase_components:form-element";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 114,  163 => 111,  158 => 110,  156 => 109,  153 => 108,  147 => 105,  144 => 104,  142 => 103,  139 => 102,  133 => 100,  131 => 99,  128 => 98,  124 => 96,  122 => 95,  119 => 94,  113 => 92,  111 => 91,  106 => 89,  103 => 88,  97 => 85,  92 => 84,  90 => 83,  87 => 82,  81 => 80,  79 => 79,  76 => 78,  72 => 76,  70 => 75,  67 => 74,  61 => 72,  59 => 71,  54 => 70,  52 => 67,  51 => 63,  49 => 58,  48 => 57,  47 => 56,  46 => 55,  45 => 54,  44 => 53,  43 => 50,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:form-element", "modules/contrib/varbase_components/components/organisms/form-element/form-element.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 50, "if" => 71);
        static $filters = array("clean_class" => 53, "escape" => 70);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
