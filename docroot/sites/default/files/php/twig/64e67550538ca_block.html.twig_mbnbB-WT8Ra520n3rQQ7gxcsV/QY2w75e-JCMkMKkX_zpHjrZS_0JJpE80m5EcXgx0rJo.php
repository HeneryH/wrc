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

/* themes/custom/wrc_theme/templates/block/block.html.twig */
class __TwigTemplate_86a49f28d668b8f8216e5adc3a38164c extends Template
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
        // line 34
        $this->loadTemplate("varbase_components:block", "themes/custom/wrc_theme/templates/block/block.html.twig", 34)->display(twig_array_merge($context, ["html_tag" => "div", "layout" =>         // line 36
($context["layout"] ?? null), "plugin_id" =>         // line 37
($context["plugin_id"] ?? null), "label" =>         // line 38
($context["label"] ?? null), "configuration" =>         // line 39
($context["configuration"] ?? null), "in_preview" =>         // line 40
($context["in_preview"] ?? null), "content" =>         // line 41
($context["content"] ?? null), "attributes" =>         // line 42
($context["attributes"] ?? null), "title_attributes" =>         // line 43
($context["title_attributes"] ?? null), "content_attributes" =>         // line 44
($context["content_attributes"] ?? null), "title_prefix" =>         // line 45
($context["title_prefix"] ?? null), "title_suffix" =>         // line 46
($context["title_suffix"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "themes/custom/wrc_theme/templates/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 46,  49 => 45,  48 => 44,  47 => 43,  46 => 42,  45 => 41,  44 => 40,  43 => 39,  42 => 38,  41 => 37,  40 => 36,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/wrc_theme/templates/block/block.html.twig", "/var/www/varbase/docroot/themes/custom/wrc_theme/templates/block/block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 34);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
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
