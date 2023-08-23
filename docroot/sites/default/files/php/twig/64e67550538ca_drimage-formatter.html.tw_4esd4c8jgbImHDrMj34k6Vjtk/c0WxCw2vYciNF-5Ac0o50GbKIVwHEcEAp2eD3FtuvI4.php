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

/* modules/contrib/drimage/templates/drimage-formatter.html.twig */
class __TwigTemplate_076c83254b367bc4381f427cf6ee218f extends Template
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
        // line 19
        $context["dummy_image"] = (((((((("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg'%20width='" . $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 19, $this->source)) . "'%20height='") . $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 19, $this->source)) . "'%20viewBox='0%200%20") . $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 19, $this->source)) . "%20") . $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 19, $this->source)) . "'%20%3E%3C/svg%3E");
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("drimage/drimage"), "html", null, true);
        echo "
<div ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_attributes"] ?? null), 21, $this->source), "html", null, true);
        echo " data-drimage=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, json_encode($this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 21, $this->source)), "html", null, true);
        echo "\">
  ";
        // line 23
        echo "  ";
        if (($context["url"] ?? null)) {
            // line 24
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 24, $this->source), "html", null, true);
            echo "\"><picture>
  ";
        } else {
            // line 26
            echo "  <picture>
  ";
        }
        // line 28
        echo "
  ";
        // line 29
        if (($context["imageapi_optimize_webp"] ?? null)) {
            // line 30
            echo "    <source data-format=\"webp\" srcset=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dummy_image"] ?? null), 30, $this->source), "html", null, true);
            echo "\" type=\"image/webp\">
  ";
        }
        // line 32
        echo "    <img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dummy_image"] ?? null), 32, $this->source), "html", null, true);
        echo "\" width=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 32, $this->source), "html", null, true);
        echo "\" height=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 32, $this->source), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["alt"] ?? null), 32, $this->source), "html", null, true);
        echo "\" />

  ";
        // line 34
        if (($context["url"] ?? null)) {
            // line 35
            echo "  </picture></a>
  ";
        } else {
            // line 37
            echo "  </picture>
  ";
        }
        // line 39
        echo "</div>
<noscript>
  <img src=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "original_source", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["alt"] ?? null), 41, $this->source), "html", null, true);
        echo "\" width=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "original_width", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "\" height=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "original_height", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "\">
</noscript>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/drimage/templates/drimage-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 41,  97 => 39,  93 => 37,  89 => 35,  87 => 34,  75 => 32,  69 => 30,  67 => 29,  64 => 28,  60 => 26,  54 => 24,  51 => 23,  45 => 21,  41 => 20,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/drimage/templates/drimage-formatter.html.twig", "/var/www/varbase/docroot/modules/contrib/drimage/templates/drimage-formatter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 19, "if" => 23);
        static $filters = array("escape" => 20, "json_encode" => 21);
        static $functions = array("attach_library" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'json_encode'],
                ['attach_library']
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
