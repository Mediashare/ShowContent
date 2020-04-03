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

/* base.html.twig */
class __TwigTemplate_ab888e1041f745ef8444e29c91d240416ac7aabb249dc7f89556bba2bed330af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 3
        $this->displayBlock('javascript', $context, $blocks);
    }

    // line 1
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 3,  54 => 2,  48 => 1,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/slote/Desktop/ShowContent/templates/base.html.twig");
    }
}
