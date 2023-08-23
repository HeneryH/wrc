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

/* modules/contrib/varbase_layout_builder/templates/vlb-section.html.twig */
class __TwigTemplate_71a43b44ee97ce03fce04b207f242dcf extends Template
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
        // line 13
        if (($context["content"] ?? null)) {
            // line 14
            echo "
  ";
            // line 15
            $context["gutters_between_off"] = (((($__internal_compile_0 = (($__internal_compile_1 = ($context["content"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#settings"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["remove_gutters"] ?? null) : null) == 1) && ((($__internal_compile_2 = (($__internal_compile_3 = ($context["content"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#settings"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["gutters_between"] ?? null) : null) == 0));
            // line 16
            echo "  ";
            $context["horizontal_alignment_classes"] = (($__internal_compile_4 = (($__internal_compile_5 = (($__internal_compile_6 = (($__internal_compile_7 = (($__internal_compile_8 = ($context["content"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#settings"] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["container_wrapper"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["bootstrap_styles"] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["horizontal_alignment"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["class"] ?? null) : null);
            // line 17
            echo "  ";
            $context["vertical_alignment_classes"] = (($__internal_compile_9 = (($__internal_compile_10 = (($__internal_compile_11 = (($__internal_compile_12 = (($__internal_compile_13 = ($context["content"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#settings"] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["container_wrapper"] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["bootstrap_styles"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["vertical_alignment"] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["class"] ?? null) : null);
            // line 18
            echo "  ";
            $context["has_container_width"] = (((($__internal_compile_14 = (($__internal_compile_15 = ($context["content"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["#settings"] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["container_width_classes"] ?? null) : null)) ? (1) : (0));
            // line 19
            echo "
  ";
            // line 20
            $context["classes"] = ["layout", "row", (((            // line 23
($context["gutters_between_off"] ?? null) && (($context["has_container_width"] ?? null) == 0))) ? ("gx-0") : ("")), ((            // line 24
($context["horizontal_alignment_classes"] ?? null)) ? (($context["horizontal_alignment_classes"] ?? null)) : ("")), ((            // line 25
($context["vertical_alignment_classes"] ?? null)) ? (($context["vertical_alignment_classes"] ?? null)) : ("")), "layout-builder__layout"];
            // line 28
            echo "
  ";
            // line 29
            $context["header_classes"] = ["vlb-section-header", "row", (((            // line 32
($context["gutters_between_off"] ?? null) && (($context["has_container_width"] ?? null) == 0))) ? ("no-gutters gx-0") : ("")), ((            // line 33
($context["horizontal_alignment_classes"] ?? null)) ? (($context["horizontal_alignment_classes"] ?? null)) : ("")), ((            // line 34
($context["vertical_alignment_classes"] ?? null)) ? (($context["vertical_alignment_classes"] ?? null)) : (""))];
            // line 36
            echo "
  ";
            // line 37
            $context["header_attributes"] = ($context["attributes"] ?? null);
            // line 38
            echo "  ";
            $context["header_attributes"] = twig_get_attribute($this->env, $this->source, ($context["header_attributes"] ?? null), "addClass", [($context["header_classes"] ?? null)], "method", false, false, true, 38);
            // line 39
            echo "
  ";
            // line 40
            if (($context["has_container_width"] ?? null)) {
                // line 41
                echo "
    ";
                // line 42
                $context["container_width_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                // line 43
                echo "    ";
                $context["container_width_attributes"] = twig_get_attribute($this->env, $this->source, ($context["container_width_attributes"] ?? null), "addClass", [(($__internal_compile_16 = (($__internal_compile_17 = ($context["content"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#settings"] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["container_width_classes"] ?? null) : null)], "method", false, false, true, 43);
                // line 44
                echo "
    ";
                // line 45
                $context["container_width_row_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                // line 46
                echo "    ";
                $context["container_width_row_attributes"] = twig_get_attribute($this->env, $this->source, ($context["container_width_row_attributes"] ?? null), "addClass", ["row"], "method", false, false, true, 46);
                // line 47
                echo "
    ";
                // line 48
                if (($context["vertical_alignment_classes"] ?? null)) {
                    // line 49
                    echo "      ";
                    $context["container_width_row_attributes"] = twig_get_attribute($this->env, $this->source, ($context["container_width_row_attributes"] ?? null), "addClass", [($context["vertical_alignment_classes"] ?? null)], "method", false, false, true, 49);
                    // line 50
                    echo "    ";
                }
                // line 51
                echo "
  ";
            }
            // line 53
            echo "
  ";
            // line 54
            if (twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_18 = ($context["content"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["section_header"] ?? null) : null)))) {
                // line 55
                echo "  <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_attributes"] ?? null), 55, $this->source), "html", null, true);
                echo ">

    ";
                // line 57
                if (($context["has_container_width"] ?? null)) {
                    // line 58
                    echo "      <div ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_width_attributes"] ?? null), 58, $this->source), "html", null, true);
                    echo ">
        <div ";
                    // line 59
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_width_row_attributes"] ?? null), 59, $this->source), "html", null, true);
                    echo ">
    ";
                }
                // line 61
                echo "
    <div ";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_19 = ($context["region_attributes"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["section_header"] ?? null) : null), 62, $this->source), "html", null, true);
                echo ">
      ";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_20 = ($context["content"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["section_header"] ?? null) : null), 63, $this->source), "html", null, true);
                echo "
    </div>

    ";
                // line 66
                if (($context["has_container_width"] ?? null)) {
                    // line 67
                    echo "        </div>
      </div>
    ";
                }
                // line 70
                echo "
  </div>
  ";
            }
            // line 73
            echo "
  <div ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 74), 74, $this->source), "html", null, true);
            echo ">

    ";
            // line 76
            if (($context["has_container_width"] ?? null)) {
                // line 77
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_width_attributes"] ?? null), 77, $this->source), "html", null, true);
                echo ">
        <div ";
                // line 78
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_width_row_attributes"] ?? null), 78, $this->source), "html", null, true);
                echo ">
    ";
            }
            // line 80
            echo "
    ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 81, $this->source), "html", null, true);
            echo "
    ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 83
                echo "      ";
                $context["region"] = ("blb_region_col_" . $this->sandbox->ensureToStringAllowed($context["i"], 83, $this->source));
                // line 84
                echo "      ";
                if ((($__internal_compile_21 = ($context["content"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[($context["region"] ?? null)] ?? null) : null)) {
                    // line 85
                    echo "        <div ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_22 = ($context["region_attributes"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[($context["region"] ?? null)] ?? null) : null), 85, $this->source), "html", null, true);
                    echo ">
          ";
                    // line 86
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_23 = ($context["content"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[($context["region"] ?? null)] ?? null) : null), 86, $this->source), "html", null, true);
                    echo "
        </div>
      ";
                }
                // line 89
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 90, $this->source), "html", null, true);
            echo "

    ";
            // line 92
            if (($context["has_container_width"] ?? null)) {
                // line 93
                echo "        </div>
      </div>
    ";
            }
            // line 96
            echo "
  </div>

";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/varbase_layout_builder/templates/vlb-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 96,  225 => 93,  223 => 92,  217 => 90,  211 => 89,  205 => 86,  200 => 85,  197 => 84,  194 => 83,  190 => 82,  186 => 81,  183 => 80,  178 => 78,  173 => 77,  171 => 76,  166 => 74,  163 => 73,  158 => 70,  153 => 67,  151 => 66,  145 => 63,  141 => 62,  138 => 61,  133 => 59,  128 => 58,  126 => 57,  120 => 55,  118 => 54,  115 => 53,  111 => 51,  108 => 50,  105 => 49,  103 => 48,  100 => 47,  97 => 46,  95 => 45,  92 => 44,  89 => 43,  87 => 42,  84 => 41,  82 => 40,  79 => 39,  76 => 38,  74 => 37,  71 => 36,  69 => 34,  68 => 33,  67 => 32,  66 => 29,  63 => 28,  61 => 25,  60 => 24,  59 => 23,  58 => 20,  55 => 19,  52 => 18,  49 => 17,  46 => 16,  44 => 15,  41 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/varbase_layout_builder/templates/vlb-section.html.twig", "/var/www/varbase/docroot/modules/contrib/varbase_layout_builder/templates/vlb-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13, "set" => 15, "for" => 82);
        static $filters = array("striptags" => 54, "render" => 54, "escape" => 55);
        static $functions = array("create_attribute" => 42, "range" => 82);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['striptags', 'render', 'escape'],
                ['create_attribute', 'range']
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
