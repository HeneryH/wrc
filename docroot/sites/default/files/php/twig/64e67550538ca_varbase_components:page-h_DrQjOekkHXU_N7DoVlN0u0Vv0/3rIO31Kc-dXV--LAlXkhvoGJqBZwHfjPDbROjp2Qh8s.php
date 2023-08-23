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

/* varbase_components:page-header */
class __TwigTemplate_570eea52b3a0b4e895b5351074631a84 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--page-header"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:page-header"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:page-header"));
        // line 7
        echo "
";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_bar", [], "any", false, false, true, 8)) {
            // line 9
            echo "  <div class=\"navbar-top w-100\">
    ";
            // line 10
            if (($context["container_top_bar"] ?? null)) {
                // line 11
                echo "    <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_top_bar"] ?? null), 11, $this->source), "html", null, true);
                echo "\">
    ";
            }
            // line 13
            echo "      <div class=\"row\">
        <div class=\"col-12\">
          ";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_bar", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
            // line 18
            if (($context["container_top_bar"] ?? null)) {
                // line 19
                echo "    </div>
    ";
            }
            // line 21
            echo "  </div>
";
        }
        // line 23
        echo "
";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 24) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 24))) {
            // line 25
            echo "  ";
            $this->loadTemplate("varbase_components:page-header", "varbase_components:page-header", 25, "403027331")->display(twig_array_merge($context, ["placement" => "", "container" =>             // line 27
($context["container_top_bar"] ?? null), "color" => "light", "utility_classes" => ["bg-light"]]));
        }
    }

    public function getTemplateName()
    {
        return "varbase_components:page-header";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  84 => 25,  82 => 24,  79 => 23,  75 => 21,  71 => 19,  69 => 18,  63 => 15,  59 => 13,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  43 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:page-header", "modules/contrib/varbase_components/components/organisms/page-header/page-header.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8, "embed" => 25);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'embed'],
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


/* varbase_components:page-header */
class __TwigTemplate_570eea52b3a0b4e895b5351074631a84___403027331 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'branding' => [$this, 'block_branding'],
            'navigation' => [$this, 'block_navigation'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "varbase_components:navbar";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--page-header"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:page-header"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:page-header"));
        // line 25
        $this->parent = $this->loadTemplate("varbase_components:navbar", "varbase_components:page-header", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_branding($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 33)) {
            // line 34
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 36
        echo "    ";
    }

    // line 38
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 39)) {
            // line 40
            echo "        <div class=\"ms-auto\">
          ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 44
        echo "    ";
    }

    public function getTemplateName()
    {
        return "varbase_components:page-header";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 44,  206 => 41,  203 => 40,  200 => 39,  196 => 38,  192 => 36,  186 => 34,  183 => 33,  179 => 32,  174 => 25,  170 => 1,  163 => 25,  86 => 27,  84 => 25,  82 => 24,  79 => 23,  75 => 21,  71 => 19,  69 => 18,  63 => 15,  59 => 13,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  43 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:page-header", "modules/contrib/varbase_components/components/organisms/page-header/page-header.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33);
        static $filters = array("escape" => 34);
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
