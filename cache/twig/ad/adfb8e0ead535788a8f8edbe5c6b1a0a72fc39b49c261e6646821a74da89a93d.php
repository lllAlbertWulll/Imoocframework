<?php

/* index.html */
class __TwigTemplate_263888343efa70b1e33bd53ebb0a676fc6f1e1fa548554a88f4f4cc63dd18fe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>这是视图文件</h1>
    <h3>";
        // line 5
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "</h3>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}

{% block content %}
    <h1>这是视图文件</h1>
    <h3>{{ data }}</h3>
{% endblock %}", "index.html", "D:\\laragon\\www\\imooc\\app\\views\\index.html");
    }
}
