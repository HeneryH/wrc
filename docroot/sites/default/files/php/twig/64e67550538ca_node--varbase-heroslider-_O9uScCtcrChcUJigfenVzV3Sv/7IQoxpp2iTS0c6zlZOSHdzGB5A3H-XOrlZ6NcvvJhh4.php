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

/* modules/contrib/varbase_heroslider_media/templates/node--varbase-heroslider-media.html.twig */
class __TwigTemplate_cdffa7019fffb92352483809939f0bb0 extends Template
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
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("varbase_heroslider_media/general-styling"), "html", null, true);
        echo "
";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("varbase_heroslider_media/general-scripts"), "html", null, true);
        echo "

";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "hasField", ["field_media_single"], "method", false, false, true, 79)) {
            // line 80
            echo "  ";
            $context["media_entity_type"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_media_single", [], "any", false, false, true, 80), "entity", [], "any", false, false, true, 80), "bundle", [], "method", false, false, true, 80);
            // line 81
            echo "
  ";
            // line 83
            echo "  ";
            if ((($context["media_entity_type"] ?? null) == "video")) {
                // line 84
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("varbase_heroslider_media/local_video_slider"), "html", null, true);
                echo "
  ";
                // line 86
                echo "  ";
            } elseif (((($context["media_entity_type"] ?? null) == "remote_video") && ($context["provider"] ?? null))) {
                // line 87
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary((("varbase_heroslider_media/" . $this->sandbox->ensureToStringAllowed(($context["provider"] ?? null), 87, $this->source)) . "_video_slider")), "html", null, true);
                echo "
  ";
            }
        }
        // line 90
        echo "
";
        // line 93
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 95
($context["node"] ?? null), "bundle", [], "any", false, false, true, 95), 95, $this->source))), ((        // line 96
($context["view_mode"] ?? null)) ? (("node--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 96, $this->source)))) : (""))];
        // line 99
        if (($context["page"] ?? null)) {
            // line 100
            echo "  ";
            $context["page_extra_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
            // line 101
            echo "  ";
            // line 102
            $context["page_extra_classes"] = ["varbase-heroslider-media", "bg-edge2edge"];
            // line 107
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page_extra_attributes"] ?? null), "addClass", [($context["page_extra_classes"] ?? null)], "method", false, false, true, 107), 107, $this->source), "html", null, true);
            echo ">
";
        }
        // line 109
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 109), 109, $this->source), "html", null, true);
        echo ">
  <div";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 110, $this->source), "html", null, true);
        echo ">
    ";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_single", [], "any", false, false, true, 111), 111, $this->source)), "html", null, true);
        echo "
    <div class=\"hero-slide-content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"hero-slide-content\">
            ";
        // line 117
        echo "            ";
        if (($context["label"] ?? null)) {
            // line 118
            echo "              <div class=\"field field--name-node-title\">
                <h2 class=\"node-title\">";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 119, $this->source), "html", null, true);
            echo "</h2>
              </div>
            ";
        }
        // line 122
        echo "            ";
        // line 123
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 123, $this->source), "field_media_single"), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 130
        if (($context["page"] ?? null)) {
            // line 131
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/varbase_heroslider_media/templates/node--varbase-heroslider-media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 131,  138 => 130,  127 => 123,  125 => 122,  119 => 119,  116 => 118,  113 => 117,  105 => 111,  101 => 110,  96 => 109,  90 => 107,  88 => 102,  86 => 101,  83 => 100,  81 => 99,  79 => 96,  78 => 95,  77 => 93,  74 => 90,  67 => 87,  64 => 86,  59 => 84,  56 => 83,  53 => 81,  50 => 80,  48 => 79,  43 => 76,  39 => 75,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/varbase_heroslider_media/templates/node--varbase-heroslider-media.html.twig", "/var/www/varbase/docroot/modules/contrib/varbase_heroslider_media/templates/node--varbase-heroslider-media.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 79, "set" => 80);
        static $filters = array("escape" => 75, "clean_class" => 95, "render" => 111, "without" => 123);
        static $functions = array("attach_library" => 75, "create_attribute" => 100);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'clean_class', 'render', 'without'],
                ['attach_library', 'create_attribute']
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
