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

/* themes/custom/wrc_theme/templates/system/html.html.twig */
class __TwigTemplate_96bb08341ec1091a0a2c62d42997ba8e extends Template
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
        // line 30
        $context["body_classes"] = [((        // line 31
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 32
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 32, $this->source))))), ((        // line 33
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 33, $this->source)))) : ("")), ((        // line 34
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), ((        // line 35
($context["navbar_position"] ?? null)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(($context["navbar_position"] ?? null), 35, $this->source))) : (""))];
        // line 39
        echo "<!DOCTYPE html>
<html";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 40, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 42, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 43, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 44, $this->source), "html", null, true);
        echo "\">
    ";
        // line 46
        if (((($__internal_compile_0 = ($context["html_attributes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["dir"] ?? null) : null) == "rtl")) {
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("wrc_theme/framework-rtl"), "html", null, true);
        }
        // line 49
        echo "<js-placeholder token=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 49, $this->source), "html", null, true);
        echo "\">";
        // line 50
        $this->loadTemplate("@wrc_theme/includes/preload.twig", "themes/custom/wrc_theme/templates/system/html.html.twig", 50)->display(twig_to_array(["wrc_theme_path" => ($context["wrc_theme_path"] ?? null), "html_dir" => (($__internal_compile_1 = ($context["html_attributes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["dir"] ?? null) : null)]));
        // line 51
        echo "</head>
  <body";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 56, $this->source), "html", null, true);
        echo "
    ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 57, $this->source), "html", null, true);
        echo "
    ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 58, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 59, $this->source), "html", null, true);
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/wrc_theme/templates/system/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 59,  98 => 58,  94 => 57,  90 => 56,  85 => 54,  80 => 52,  77 => 51,  75 => 50,  71 => 49,  68 => 47,  66 => 46,  62 => 44,  58 => 43,  54 => 42,  49 => 40,  46 => 39,  44 => 35,  43 => 34,  42 => 33,  41 => 32,  40 => 31,  39 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/wrc_theme/templates/system/html.html.twig", "/var/www/varbase/docroot/themes/custom/wrc_theme/templates/system/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "if" => 46, "include" => 50);
        static $filters = array("clean_class" => 32, "escape" => 40, "safe_join" => 43, "t" => 54);
        static $functions = array("attach_library" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'escape', 'safe_join', 't'],
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
