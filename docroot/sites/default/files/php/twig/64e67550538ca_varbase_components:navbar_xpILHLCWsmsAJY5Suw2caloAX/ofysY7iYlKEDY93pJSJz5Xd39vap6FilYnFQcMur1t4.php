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

/* varbase_components:navbar-brand */
class __TwigTemplate_ff7a0008ea5dc265bfcd841be448a0a5 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--navbar-brand"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:navbar-brand"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:navbar-brand"));
        // line 18
        echo "
";
        // line 20
        $macros["navbar_brand"] = $this->macros["navbar_brand"] = $this;
        // line 21
        echo "
";
        // line 26
        echo "
";
        // line 27
        $context["utility_classes"] = twig_join_filter($this->sandbox->ensureToStringAllowed(($context["utility_classes"] ?? null), 27, $this->source), " ");
        // line 28
        echo "
";
        // line 29
        if (($context["path"] ?? null)) {
            // line 30
            echo "  <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["path"] ?? null), 30, $this->source), "html", null, true);
            echo "\" class=\"navbar-brand d-flex align-items-center ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["utility_classes"] ?? null), 30, $this->source), "html", null, true);
            echo "\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 30, $this->source), "html", null, true);
            echo "\">
    ";
            // line 31
            if (($context["image_path"] ?? null)) {
                // line 32
                echo "      ";
                // line 33
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["navbar_brand"], "macro_image", [($context["image_path"] ?? null), ($context["width"] ?? null), ($context["height"] ?? null), ($context["alt"] ?? null)], 33, $context, $this->getSourceContext()));
                echo "
    ";
            }
            // line 35
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 35, $this->source), "html", null, true);
            echo "
  </a>
";
        } else {
            // line 38
            echo "  <span class=\"navbar-brand h1 mb-0 ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["utility_classes"] ?? null), 38, $this->source), "html", null, true);
            echo "\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 38, $this->source), "html", null, true);
            echo "\">
    ";
            // line 39
            if (($context["image_path"] ?? null)) {
                // line 40
                echo "      ";
                // line 41
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["navbar_brand"], "macro_image", [($context["image_path"] ?? null), ($context["width"] ?? null), ($context["height"] ?? null), ($context["alt"] ?? null)], 41, $context, $this->getSourceContext()));
                echo "
    ";
            }
            // line 43
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 43, $this->source), "html", null, true);
            echo "
  </span>
";
        }
    }

    // line 23
    public function macro_image($__src__ = null, $__width__ = null, $__height__ = null, $__alt__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "src" => $__src__,
            "width" => $__width__,
            "height" => $__height__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 24
            echo "  <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 24, $this->source), "html", null, true);
            echo "\" height=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 24, $this->source), "html", null, true);
            echo "\" width=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 24, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("alt", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["alt"] ?? null), 24, $this->source), "")) : ("")), "html", null, true);
            echo "\" class=\"me-2\" />
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "varbase_components:navbar-brand";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 24,  113 => 23,  104 => 43,  98 => 41,  96 => 40,  94 => 39,  87 => 38,  80 => 35,  74 => 33,  72 => 32,  70 => 31,  61 => 30,  59 => 29,  56 => 28,  54 => 27,  51 => 26,  48 => 21,  46 => 20,  43 => 18,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:navbar-brand", "modules/contrib/varbase_components/components/molecules/navbar-brand/navbar-brand.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 20, "set" => 27, "if" => 29, "macro" => 23);
        static $filters = array("join" => 27, "escape" => 30, "default" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'if', 'macro'],
                ['join', 'escape', 'default'],
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
