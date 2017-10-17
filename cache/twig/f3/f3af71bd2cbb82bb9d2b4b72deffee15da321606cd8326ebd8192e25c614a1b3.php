<?php

/* layout.html */
class __TwigTemplate_d0d989f08576fd4c78335295c68c7f8a930a9b7c11194391a47249fe2879a326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>

<header>header</header>

<content>
    ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "</content>

<footer>footer</footer>

</body>
</html>";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  47 => 15,  38 => 17,  36 => 15,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>

<header>header</header>

<content>
    {% block content %}
    {% endblock %}
</content>

<footer>footer</footer>

</body>
</html>", "layout.html", "D:\\laragon\\www\\imooc\\app\\views\\layout.html");
    }
}
