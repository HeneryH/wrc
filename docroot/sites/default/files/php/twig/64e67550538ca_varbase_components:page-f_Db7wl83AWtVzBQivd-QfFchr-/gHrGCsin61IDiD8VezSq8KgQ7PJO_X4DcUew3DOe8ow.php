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

/* varbase_components:page-footer */
class __TwigTemplate_1bffd590dff9d353f472a35970ed229c extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--page-footer"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:page-footer"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:page-footer"));
        // line 7
        echo "
";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 8) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 8))) {
            // line 9
            echo "  <footer class=\"footer small w-100 bg-light mt-auto py-3\">
    ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 10)) {
                // line 11
                echo "      <div class=\"w-100 footer-top\">
        ";
                // line 12
                if (($context["container_footer_top"] ?? null)) {
                    // line 13
                    echo "        <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_footer_top"] ?? null), 13, $this->source), "html", null, true);
                    echo "\">
        ";
                }
                // line 15
                echo "          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"d-flex justify-content-md-between align-items-md-center\">
                 ";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          </div>
        ";
                // line 22
                if (($context["container_footer_top"] ?? null)) {
                    // line 23
                    echo "        </div>
        ";
                }
                // line 25
                echo "      </div>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 28)) {
                // line 29
                echo "      <div class=\"w-100 footer-bottom\">
        ";
                // line 30
                if (($context["container_footer_bottom"] ?? null)) {
                    // line 31
                    echo "        <div class=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_footer_bottom"] ?? null), 31, $this->source), "html", null, true);
                    echo "\">
        ";
                }
                // line 33
                echo "          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"d-flex justify-content-md-between align-items-md-center\">
                ";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          </div>
        ";
                // line 40
                if (($context["container_footer_bottom"] ?? null)) {
                    // line 41
                    echo "        </div>
        ";
                }
                // line 43
                echo "      </div>
    ";
            }
            // line 45
            echo "
  </footer>
";
        }
        // line 48
        echo "
";
    }

    public function getTemplateName()
    {
        return "varbase_components:page-footer";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 48,  124 => 45,  120 => 43,  116 => 41,  114 => 40,  107 => 36,  102 => 33,  96 => 31,  94 => 30,  91 => 29,  89 => 28,  86 => 27,  82 => 25,  78 => 23,  76 => 22,  69 => 18,  64 => 15,  58 => 13,  56 => 12,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  43 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:page-footer", "modules/contrib/varbase_components/components/organisms/page-footer/page-footer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8);
        static $filters = array("escape" => 13);
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
