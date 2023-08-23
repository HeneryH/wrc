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

/* modules/contrib/ui_patterns/templates/patterns-use-wrapper.html.twig */
class __TwigTemplate_9efe1c4075cb4607891d29d7faf82811 extends Template
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
        // line 9
        $this->loadTemplate(($context["use"] ?? null), "modules/contrib/ui_patterns/templates/patterns-use-wrapper.html.twig", 9)->display($context);
    }

    public function getTemplateName()
    {
        return "modules/contrib/ui_patterns/templates/patterns-use-wrapper.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/ui_patterns/templates/patterns-use-wrapper.html.twig", "/var/www/varbase/docroot/modules/contrib/ui_patterns/templates/patterns-use-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 9);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
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
