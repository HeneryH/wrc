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

/* varbase_components:block */
class __TwigTemplate_6659dbe27bbc52371824c978f557689d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--block"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:block"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:block"));
        // line 35
        $context["classes"] = ["block", ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 37
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 37), 37, $this->source))), ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["plugin_id"] ?? null), 38, $this->source))), ((        // line 39
($context["layout"] ?? null)) ? (("layout--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 39, $this->source)))) : ("")), ((        // line 40
($context["bundle"] ?? null)) ? (("block--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["bundle"] ?? null), 40, $this->source)))) : ("")), ((        // line 41
($context["id"] ?? null)) ? (("block--" . \Drupal\Component\Utility\Html::getClass(twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 41, $this->source), ["_" => "-"])))) : (""))];
        // line 44
        echo "
";
        // line 45
        if (($context["html_tag"] ?? null)) {
            // line 46
            echo "  <";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null), 46, $this->source), "html", null, true);
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
            echo ">
";
        }
        // line 48
        echo "
  ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 49, $this->source), "html", null, true);
        echo "
  ";
        // line 50
        if (($context["label"] ?? null)) {
            // line 51
            echo "  ";
            $this->loadTemplate("varbase_components:heading", "varbase_components:block", 51)->display(twig_array_merge($context, ["html_tag" => "h2", "content" =>             // line 53
($context["label"] ?? null), "attributes" =>             // line 54
($context["title_attributes"] ?? null), "utility_classes" => ["block__title"]]));
            // line 58
            echo "  ";
        }
        // line 59
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 59, $this->source), "html", null, true);
        echo "
  ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        if (($context["html_tag"] ?? null)) {
            // line 67
            echo "  </";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_tag"] ?? null), 67, $this->source), "html", null, true);
            echo ">
";
        }
    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["block__content"], "method", false, false, true, 61), 61, $this->source), "html", null, true);
        echo ">
      ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 62, $this->source), "html", null, true);
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "varbase_components:block";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 62,  104 => 61,  100 => 60,  92 => 67,  90 => 66,  87 => 65,  85 => 60,  80 => 59,  77 => 58,  75 => 54,  74 => 53,  72 => 51,  70 => 50,  66 => 49,  63 => 48,  56 => 46,  54 => 45,  51 => 44,  49 => 41,  48 => 40,  47 => 39,  46 => 38,  45 => 37,  44 => 35,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:block", "modules/contrib/varbase_components/components/organisms/block/block.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "if" => 45, "include" => 51, "block" => 60);
        static $filters = array("clean_class" => 37, "replace" => 41, "escape" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block'],
                ['clean_class', 'replace', 'escape'],
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
