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

/* varbase_components:breadcrumb */
class __TwigTemplate_21dbf1112ac6b2a0c89dec49409ba7c2 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--breadcrumb"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:breadcrumb"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:breadcrumb"));
        // line 10
        echo "
";
        // line 11
        $context["utility_classes"] = ((($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([]));
        // line 12
        echo "
";
        // line 13
        $context["classes"] = twig_array_merge([], $this->sandbox->ensureToStringAllowed(($context["utility_classes"] ?? null), 13, $this->source));
        // line 14
        echo "
";
        // line 15
        if ( !($context["attributes"] ?? null)) {
            // line 16
            echo "  ";
            $context["attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
            // line 17
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["aria-label", "breadcrumb"], "method", false, false, true, 17);
        }
        // line 19
        echo "
";
        // line 20
        if (($context["breadcrumb"] ?? null)) {
            // line 21
            echo "  <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
            echo ">
    <ol class=\"breadcrumb bg-light py-2 px-3 my-2\">
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "        <li class=\"breadcrumb-item ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((( !twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 24)) ? ("active") : ("")));
                echo "\">
          ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 25)) {
                    // line 26
                    echo "            <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                    echo "</a>
          ";
                } else {
                    // line 28
                    echo "            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                    echo "
          ";
                }
                // line 30
                echo "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </ol>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "varbase_components:breadcrumb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  101 => 30,  95 => 28,  87 => 26,  85 => 25,  80 => 24,  76 => 23,  70 => 21,  68 => 20,  65 => 19,  61 => 17,  58 => 16,  56 => 15,  53 => 14,  51 => 13,  48 => 12,  46 => 11,  43 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:breadcrumb", "modules/contrib/varbase_components/components/molecules/breadcrumb/breadcrumb.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "if" => 15, "for" => 23);
        static $filters = array("merge" => 13, "escape" => 21);
        static $functions = array("create_attribute" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
