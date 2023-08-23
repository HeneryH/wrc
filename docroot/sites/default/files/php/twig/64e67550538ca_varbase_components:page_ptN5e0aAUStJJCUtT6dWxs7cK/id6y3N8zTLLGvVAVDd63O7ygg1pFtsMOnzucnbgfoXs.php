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

/* varbase_components:page */
class __TwigTemplate_cf3dd4454765db9df5ec7d37c21afe62 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--page"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:page"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:page"));
        // line 55
        echo "<div id=\"page\" class=\"page d-flex flex-column\">

  ";
        // line 57
        $this->loadTemplate("varbase_components:page-header", "varbase_components:page", 57)->display($context);
        // line 58
        echo "
  <main class=\"mb-3\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 61
        echo "
    ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 62)) {
            // line 63
            echo "      <div class=\"content-above\">
        ";
            // line 64
            if (($context["container_content_above"] ?? null)) {
                // line 65
                echo "        <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_content_above"] ?? null), 65, $this->source), "html", null, true);
                echo "\">
        ";
            }
            // line 67
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "
        ";
            // line 68
            if (($context["container_content_above"] ?? null)) {
                // line 69
                echo "        </div>
        ";
            }
            // line 71
            echo "      </div>
    ";
        }
        // line 73
        echo "
    ";
        // line 74
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 74) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_sidebar", [], "any", false, false, true, 74)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_sidebar", [], "any", false, false, true, 74))) {
            // line 75
            echo "      ";
            if (($context["container_content"] ?? null)) {
                // line 76
                echo "      <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_content"] ?? null), 76, $this->source), "html", null, true);
                echo "\">
      ";
            }
            // line 78
            echo "        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"page-content\">
              ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_sidebar", [], "any", false, false, true, 81)) {
                // line 82
                echo "                <div class=\"primary-sidebar\">
                  ";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_sidebar", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 86
            echo "
              <div class=\"inner-content\">
                ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
              </div>

              ";
            // line 91
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_sidebar", [], "any", false, false, true, 91)) {
                // line 92
                echo "                <div class=\"secondary-sidebar\">
                  ";
                // line 93
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_sidebar", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 96
            echo "            </div>
          </div>
        </div>
      ";
            // line 99
            if (($context["container_content"] ?? null)) {
                // line 100
                echo "      </div>
      ";
            }
            // line 102
            echo "    ";
        }
        // line 103
        echo "
    ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 104)) {
            // line 105
            echo "      <div class=\"content-below\">
        ";
            // line 106
            if (($context["container_content_below"] ?? null)) {
                // line 107
                echo "        <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_content_below"] ?? null), 107, $this->source), "html", null, true);
                echo "\">
        ";
            }
            // line 109
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "
        ";
            // line 110
            if (($context["container_content_below"] ?? null)) {
                // line 111
                echo "        </div>
        ";
            }
            // line 113
            echo "      </div>
    ";
        }
        // line 115
        echo "  </main>

  ";
        // line 117
        $this->loadTemplate("varbase_components:page-footer", "varbase_components:page", 117)->display($context);
        // line 118
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "varbase_components:page";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 118,  184 => 117,  180 => 115,  176 => 113,  172 => 111,  170 => 110,  165 => 109,  159 => 107,  157 => 106,  154 => 105,  152 => 104,  149 => 103,  146 => 102,  142 => 100,  140 => 99,  135 => 96,  129 => 93,  126 => 92,  124 => 91,  118 => 88,  114 => 86,  108 => 83,  105 => 82,  103 => 81,  98 => 78,  92 => 76,  89 => 75,  87 => 74,  84 => 73,  80 => 71,  76 => 69,  74 => 68,  69 => 67,  63 => 65,  61 => 64,  58 => 63,  56 => 62,  53 => 61,  49 => 58,  47 => 57,  43 => 55,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:page", "modules/contrib/varbase_components/components/pages/page/page.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 57, "if" => 62);
        static $filters = array("escape" => 65);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
