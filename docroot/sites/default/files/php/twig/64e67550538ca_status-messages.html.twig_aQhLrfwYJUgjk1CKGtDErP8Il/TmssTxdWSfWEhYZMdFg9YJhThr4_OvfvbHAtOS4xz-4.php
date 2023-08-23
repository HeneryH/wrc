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

/* themes/custom/wrc_theme/templates/misc/status-messages.html.twig */
class __TwigTemplate_5f709ee737b81e8cf15f4fdf77a051db extends Template
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
        // line 7
        $context["types"] = ["status" => "alert-success", "warning" => "alert-warning", "error" => "alert-danger", "info" => "alert-info", "primary" => "alert-primary", "secondary" => "alert-secondary", "light" => "alert-light", "dark" => "alert-dark"];
        // line 17
        echo "
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
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
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 19
            echo "\t<div role=\"region\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 19, $this->source), "html", null, true);
            echo "\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 19, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
\t\t";
            // line 20
            $this->loadTemplate("themes/custom/wrc_theme/templates/misc/status-messages.html.twig", "themes/custom/wrc_theme/templates/misc/status-messages.html.twig", 20, "1156609202")->display(twig_array_merge($context, ["type" => (($__internal_compile_1 =             // line 21
($context["types"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)]));
            // line 38
            echo "\t</div>
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/custom/wrc_theme/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 38,  69 => 21,  68 => 20,  61 => 19,  44 => 18,  41 => 17,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/wrc_theme/templates/misc/status-messages.html.twig", "/var/www/varbase/docroot/themes/custom/wrc_theme/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "for" => 18, "embed" => 20);
        static $filters = array("escape" => 19, "without" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'embed'],
                ['escape', 'without'],
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


/* themes/custom/wrc_theme/templates/misc/status-messages.html.twig */
class __TwigTemplate_5f709ee737b81e8cf15f4fdf77a051db___1156609202 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "varbase_components:alert";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("varbase_components:alert", "themes/custom/wrc_theme/templates/misc/status-messages.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "\t\t\t\t";
        if ((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["type"] ?? null)] ?? null) : null)) {
            // line 25
            echo "\t\t\t\t\t<h2 class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["type"] ?? null)] ?? null) : null), 25, $this->source), "html", null, true);
            echo "</h2>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t";
        if ((twig_length_filter($this->env, ($context["messages"] ?? null)) > 1)) {
            // line 28
            echo "\t\t\t\t\t<ul>
\t\t\t\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 30
                echo "\t\t\t\t\t\t\t<li>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 30, $this->source), "html", null, true);
                echo "</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 34, $this->source)), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 36
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "themes/custom/wrc_theme/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 36,  206 => 34,  202 => 32,  193 => 30,  189 => 29,  186 => 28,  183 => 27,  177 => 25,  174 => 24,  170 => 23,  159 => 20,  71 => 38,  69 => 21,  68 => 20,  61 => 19,  44 => 18,  41 => 17,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/wrc_theme/templates/misc/status-messages.html.twig", "/var/www/varbase/docroot/themes/custom/wrc_theme/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24, "for" => 29);
        static $filters = array("escape" => 25, "length" => 27, "first" => 34);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length', 'first'],
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
