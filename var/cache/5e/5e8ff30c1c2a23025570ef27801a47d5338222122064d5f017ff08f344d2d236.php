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
class __TwigTemplate_5ead61e8a747899f5aa0fe6beb1003287b17da6ea021a4931fc3c1f13e672884 extends Template
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
        echo "<link href=\"assets/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
";
        // line 2
        $this->displayBlock('css', $context, $blocks);
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 4
        $this->displayBlock('javascript', $context, $blocks);
    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
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
        return array (  63 => 4,  57 => 3,  51 => 2,  47 => 4,  45 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"assets/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
{% block css %}{% endblock %}
{% block content %}{% endblock %}
{% block javascript %}{% endblock %}", "base.html.twig", "/Users/slote/Desktop/ShowContent/templates/base.html.twig");
    }
}
