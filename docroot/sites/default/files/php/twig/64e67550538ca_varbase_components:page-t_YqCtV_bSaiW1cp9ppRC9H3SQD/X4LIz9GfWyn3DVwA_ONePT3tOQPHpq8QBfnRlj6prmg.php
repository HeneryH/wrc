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

/* varbase_components:page-title */
class __TwigTemplate_38636f7f971af29fcd1c5f19be5ccdb0 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--page-title"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:page-title"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:page-title"));
        // line 23
        $context["classes"] = twig_array_merge(["title", "page-title"], ((        // line 26
($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([])));
        // line 28
        echo "
";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 29, $this->source), "html", null, true);
        echo "
";
        // line 30
        if (twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["title"] ?? null))))) {
            // line 31
            echo "  ";
            $this->loadTemplate("varbase_components:heading", "varbase_components:page-title", 31)->display(twig_to_array(["html_tag" => "h1", "content" =>             // line 33
($context["title"] ?? null), "attributes" =>             // line 34
($context["title_attributes"] ?? null), "utility_classes" =>             // line 35
($context["classes"] ?? null)]));
        }
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 39, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "varbase_components:page-title";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 39,  59 => 35,  58 => 34,  57 => 33,  55 => 31,  53 => 30,  49 => 29,  46 => 28,  44 => 26,  43 => 23,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:page-title", "modules/contrib/varbase_components/components/molecules/page-title/page-title.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "if" => 30, "include" => 31);
        static $filters = array("merge" => 26, "escape" => 29, "trim" => 30, "striptags" => 30, "render" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['merge', 'escape', 'trim', 'striptags', 'render'],
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
