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

/* varbase_components:nav */
class __TwigTemplate_f18d4c15f4f9e2f2305e68bd06dd0085 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'items' => [$this, 'block_items'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sdc/varbase_components--nav"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->addAdditionalContext($context, "varbase_components:nav"));
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\sdc\Twig\TwigExtension']->validateProps($context, "varbase_components:nav"));
        // line 13
        $context["utility_classes"] = ((($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([]));
        // line 14
        echo "
";
        // line 15
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 16
        echo "
";
        // line 17
        if ((($context["alignment"] ?? null) == "right")) {
            // line 18
            echo "  ";
            $context["alignment"] = "justify-content-end";
        } elseif ((        // line 19
($context["alignment"] ?? null) == "center")) {
            // line 20
            echo "  ";
            $context["alignment"] = "justify-content-center";
        } elseif ((        // line 21
($context["alignment"] ?? null) == "vertical")) {
            // line 22
            echo "  ";
            $context["alignment"] = "flex-column";
        } else {
            // line 24
            echo "  ";
            $context["alignment"] = "";
        }
        // line 26
        echo "
";
        // line 27
        $context["style"] = ((($context["style"] ?? null)) ? (("nav-" . $this->sandbox->ensureToStringAllowed(($context["style"] ?? null), 27, $this->source))) : (""));
        // line 28
        $context["fill"] = ((($context["fill"] ?? null)) ? (("nav-" . $this->sandbox->ensureToStringAllowed(($context["fill"] ?? null), 28, $this->source))) : (""));
        // line 29
        echo "
";
        // line 31
        $context["nav_classes"] = twig_array_merge(["nav",         // line 33
($context["style"] ?? null),         // line 34
($context["alignment"] ?? null),         // line 35
($context["fill"] ?? null)], $this->sandbox->ensureToStringAllowed(        // line 36
($context["utility_classes"] ?? null), 36, $this->source));
        // line 38
        echo "
";
        // line 39
        if (($context["items"] ?? null)) {
            // line 40
            echo "  <ul";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["nav_classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo ">
    ";
            // line 41
            $this->displayBlock('items', $context, $blocks);
            // line 68
            echo "  </ul>
";
        }
    }

    // line 41
    public function block_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "        ";
            $context["nav_item_classes"] = ["nav-item", ((twig_get_attribute($this->env, $this->source,             // line 45
$context["item"], "in_active_trail", [], "any", false, false, true, 45)) ? ("active") : ("")), (((twig_get_attribute($this->env, $this->source,             // line 46
$context["item"], "is_expanded", [], "any", false, false, true, 46) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 46))) ? ("dropdown") : (""))];
            // line 48
            echo "        ";
            $context["nav_link_classes"] = ["nav-link"];
            // line 49
            echo "        ";
            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 49), "options", [], "any", false, false, true, 49), "attributes", [], "any", false, false, true, 49), "class", [], "any", false, false, true, 49))) {
                // line 50
                echo "          ";
                $context["nav_link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 50, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 50), "options", [], "any", false, false, true, 50), "attributes", [], "any", false, false, true, 50), "class", [], "any", false, false, true, 50), 50, $this->source));
                // line 51
                echo "        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 51), "options", [], "any", false, false, true, 51), "attributes", [], "any", false, false, true, 51), "class", [], "any", false, false, true, 51)) {
                // line 52
                echo "          ";
                $context["nav_link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 52, $this->source), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52), "options", [], "any", false, false, true, 52), "attributes", [], "any", false, false, true, 52), "class", [], "any", false, false, true, 52)]);
                // line 53
                echo "        ";
            }
            // line 54
            echo "        <li class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["nav_item_classes"] ?? null), 54, $this->source), " "), "html", null, true);
            echo "\">
          ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 55) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 55))) {
                // line 56
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "\" class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter(twig_array_merge($this->sandbox->ensureToStringAllowed(($context["nav_link_classes"] ?? null), 56, $this->source), ["dropdown-toggle"]), " "), "html", null, true);
                echo "\" data-bs-toggle=\"dropdown\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "</a>
            ";
                // line 57
                if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 57)) {
                    // line 58
                    echo "              ";
                    $this->loadTemplate("varbase_components:dropdown-menu", "varbase_components:nav", 58)->display(twig_array_merge($context, ["items" => twig_get_attribute($this->env, $this->source,                     // line 59
$context["item"], "below", [], "any", false, false, true, 59)]));
                    // line 61
                    echo "            ";
                }
                // line 62
                echo "          ";
            } else {
                // line 63
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 63), 63, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 63), 63, $this->source), ["class" => ($context["nav_link_classes"] ?? null)]), "html", null, true);
                echo "
          ";
            }
            // line 65
            echo "        </li>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    ";
    }

    public function getTemplateName()
    {
        return "varbase_components:nav";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 67,  187 => 65,  181 => 63,  178 => 62,  175 => 61,  173 => 59,  171 => 58,  169 => 57,  160 => 56,  158 => 55,  153 => 54,  150 => 53,  147 => 52,  144 => 51,  141 => 50,  138 => 49,  135 => 48,  133 => 46,  132 => 45,  130 => 43,  112 => 42,  108 => 41,  102 => 68,  100 => 41,  95 => 40,  93 => 39,  90 => 38,  88 => 36,  87 => 35,  86 => 34,  85 => 33,  84 => 31,  81 => 29,  79 => 28,  77 => 27,  74 => 26,  70 => 24,  66 => 22,  64 => 21,  61 => 20,  59 => 19,  56 => 18,  54 => 17,  51 => 16,  49 => 15,  46 => 14,  44 => 13,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "varbase_components:nav", "modules/contrib/varbase_components/components/organisms/nav/nav.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "import" => 15, "if" => 17, "block" => 41, "for" => 42, "include" => 58);
        static $filters = array("merge" => 36, "escape" => 40, "join" => 54);
        static $functions = array("link" => 63);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'import', 'if', 'block', 'for', 'include'],
                ['merge', 'escape', 'join'],
                ['link']
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
