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

/* video.html.twig */
class __TwigTemplate_b16e75fd0faf414cf38eef52e25dee41d1dbce787c239d6060dc93a91012cfe0 extends Template
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
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "video.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <video width=\"100%\" height=\"100%\" controls>
        <source src=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "path", [], "any", false, false, false, 5), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "mimeType", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
        Your browser does not support the video tag.
    </video>
";
    }

    public function getTemplateName()
    {
        return "video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
    <video width=\"100%\" height=\"100%\" controls>
        <source src=\"{{ file.path }}\" type=\"{{ file.mimeType }}\">
        Your browser does not support the video tag.
    </video>
{% endblock %}", "video.html.twig", "/Users/slote/Desktop/ShowContent/templates/video.html.twig");
    }
}
