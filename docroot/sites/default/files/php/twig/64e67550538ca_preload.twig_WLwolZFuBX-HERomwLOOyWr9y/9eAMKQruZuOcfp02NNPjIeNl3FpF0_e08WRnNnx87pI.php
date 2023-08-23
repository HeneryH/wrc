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

/* @wrc_theme/includes/preload.twig */
class __TwigTemplate_e872498e1af340bb8d001f08f377683e extends Template
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
        // line 11
        echo "
";
        // line 23
        echo "
";
        // line 25
        echo "
";
        // line 27
        echo "<link rel=\"preload\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 27, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-regular-400.eot\" as=\"font\" type=\"font/eot\" crossorigin=\"anonymous\">
<link rel=\"preload\" href=\"";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 28, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-regular-400.svg\" as=\"font\" type=\"font/svg\" crossorigin=\"anonymous\">
<link rel=\"preload\" href=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 29, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-regular-400.ttf\" as=\"font\" type=\"font/ttf\" crossorigin=\"anonymous\">
<link rel=\"preload\" href=\"";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 30, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-regular-400.woff\" as=\"font\" type=\"font/woff\" crossorigin=\"anonymous\">
<link rel=\"preload\" href=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 31, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-regular-400.woff2\" as=\"font\" type=\"font/woff2\" crossorigin=\"anonymous\">
";
        // line 33
        echo "<link rel=\"preload\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 33, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-solid-900.eot\" as=\"font\" type=\"font/eot\" crossorigin=\"anonymous\">
<link rel=\"preload\" href=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 34, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-solid-900.svg\" as=\"font\" type=\"font/svg\" crossorigin=\"anonymous\">
<link rel=\"preload\" href=\"";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 35, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-solid-900.ttf\" as=\"font\" type=\"font/ttf\" crossorigin=\"anonymous\">
<link rel=\"preload\" href=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 36, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-solid-900.woff\" as=\"font\" type=\"font/woff\" crossorigin=\"anonymous\">
<link rel=\"preload\" href=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 37, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-solid-900.woff2\" as=\"font\" type=\"font/woff2\" crossorigin=\"anonymous\">
";
        // line 39
        echo "<link rel=\"preload\" href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 39, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-brands-400.eot\" as=\"font\" type=\"font/eot\" crossorigin=\"anonymous\">
<link rel=\"preload\" href=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 40, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-brands-400.svg\" as=\"font\" type=\"font/svg\" crossorigin=\"anonymous\">
<link rel=\"preload\" href=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 41, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-brands-400.ttf\" as=\"font\" type=\"font/ttf\" crossorigin=\"anonymous\">
<link rel=\"preload\" href=\"";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 42, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-brands-400.woff\" as=\"font\" type=\"font/woff\" crossorigin=\"anonymous\">
<link rel=\"preload\" href=\"";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 43, $this->source), "html", null, true);
        echo "/fonts/fontawesome-free/webfonts/fa-brands-400.woff2\" as=\"font\" type=\"font/woff2\" crossorigin=\"anonymous\">

";
        // line 54
        echo "
";
        // line 56
        if ((($context["html_dir"] ?? null) == "rtl")) {
            // line 57
            echo "  ";
            // line 58
            echo "  <link rel=\"preload\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 58, $this->source), "html", null, true);
            echo "/fonts/droid/arabic/kufi/webfonts/v6/DroidKufi-Bold.eot\" as=\"font\" type=\"font/eot\" crossorigin=\"anonymous\">
  <link rel=\"preload\" href=\"";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 59, $this->source), "html", null, true);
            echo "/fonts/droid/arabic/kufi/webfonts/v6/DroidKufi-Bold.ttf\" as=\"font\" type=\"font/ttf\" crossorigin=\"anonymous\">
  <link rel=\"preload\" href=\"";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 60, $this->source), "html", null, true);
            echo "/fonts/droid/arabic/kufi/webfonts/v6/DroidKufi-Bold.woff\" as=\"font\" type=\"font/woff\" crossorigin=\"anonymous\">
  <link rel=\"preload\" href=\"";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 61, $this->source), "html", null, true);
            echo "/fonts/droid/arabic/kufi/webfonts/v6/DroidKufi-Bold.woff2\" as=\"font\" type=\"font/woff2\" crossorigin=\"anonymous\">

  ";
            // line 64
            echo "  <link rel=\"preload\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 64, $this->source), "html", null, true);
            echo "/fonts/droid/arabic/kufi/webfonts/v6/DroidKufi-Regular.eot\" as=\"font\" type=\"font/eot\" crossorigin=\"anonymous\">
  <link rel=\"preload\" href=\"";
            // line 65
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 65, $this->source), "html", null, true);
            echo "/fonts/droid/arabic/kufi/webfonts/v6/DroidKufi-Regular.ttf\" as=\"font\" type=\"font/ttf\" crossorigin=\"anonymous\">
  <link rel=\"preload\" href=\"";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 66, $this->source), "html", null, true);
            echo "/fonts/droid/arabic/kufi/webfonts/v6/DroidKufi-Regular.woff\" as=\"font\" type=\"font/woff\" crossorigin=\"anonymous\">
  <link rel=\"preload\" href=\"";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrc_theme_path"] ?? null), 67, $this->source), "html", null, true);
            echo "/fonts/droid/arabic/kufi/webfonts/v6/DroidKufi-Regular.woff2\" as=\"font\" type=\"font/woff2\" crossorigin=\"anonymous\">
";
        }
    }

    public function getTemplateName()
    {
        return "@wrc_theme/includes/preload.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 67,  146 => 66,  142 => 65,  137 => 64,  132 => 61,  128 => 60,  124 => 59,  119 => 58,  117 => 57,  115 => 56,  112 => 54,  107 => 43,  103 => 42,  99 => 41,  95 => 40,  90 => 39,  86 => 37,  82 => 36,  78 => 35,  74 => 34,  69 => 33,  65 => 31,  61 => 30,  57 => 29,  53 => 28,  48 => 27,  45 => 25,  42 => 23,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@wrc_theme/includes/preload.twig", "/var/www/varbase/docroot/themes/custom/wrc_theme/templates/includes/preload.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 56);
        static $filters = array("escape" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
