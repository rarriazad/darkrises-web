<?php

/* DarkRisesWebBundle:Default:base.html.twig */
class __TwigTemplate_8735aebb10b6234d4d632574b4890b7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'lightboxes' => array($this, 'block_lightboxes'),
            'menu' => array($this, 'block_menu'),
            'idioma' => array($this, 'block_idioma'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!Doctype html>
<html xmlns:fb=\"http://www.facebook.com/2008/fbml\"
      xmlns:og=\"http://opengraphprotocol.org/schema/\">
\t<head>
\t\t<title>Dark Rises</title>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "\t</head>
\t<body>
\t";
        // line 12
        $this->displayBlock('lightboxes', $context, $blocks);
        // line 15
        echo "\t\t<div class=\"page\">
\t\t\t<div class=\"header head\">
\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Dark Rises\"/>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 20
        $this->displayBlock('menu', $context, $blocks);
        // line 23
        echo "\t\t<div class=\"page main-content\">
\t\t\t";
        // line 24
        $this->displayBlock('idioma', $context, $blocks);
        // line 27
        echo "\t\t\t<div class=\"body\">
\t\t\t\t
\t\t\t\t<div class=\"main\">
\t\t\t\t\t";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t\t<div class=\"menu up\">
\t\t\t<div class=\"foot yellow\">
\t\t\t";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dark Rises y todas las imagenes asociadas con Dark Rises son propiedad de © Copyright 2012 Last Seal S A. Todos los Derechos Reservados", array(), "messages");
        // line 41
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t";
        // line 44
        $this->displayBlock('javascript', $context, $blocks);
        // line 47
        echo "\t\t
\t</body>
</html>";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t\t";
        $this->env->loadTemplate("DarkRisesWebBundle:Default:css.html.twig")->display($context);
        // line 9
        echo "\t\t";
    }

    // line 12
    public function block_lightboxes($context, array $blocks = array())
    {
        // line 13
        echo "\t\t<div class='shadow'></div>
\t";
    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        // line 21
        echo "\t\t  ";
        $this->env->loadTemplate("DarkRisesWebBundle:Default:menu.html.twig")->display($context);
        // line 22
        echo "\t\t";
    }

    // line 24
    public function block_idioma($context, array $blocks = array())
    {
        // line 25
        echo "\t\t\t\t";
        $this->env->loadTemplate("DarkRisesWebBundle:Default:idioma.html.twig")->display($context);
        // line 26
        echo "\t\t\t";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "\t\t\t\t\t
\t\t\t\t\t";
    }

    // line 44
    public function block_javascript($context, array $blocks = array())
    {
        // line 45
        echo "\t\t\t";
        $this->env->loadTemplate("DarkRisesWebBundle:Default:javascriptMenu.html.twig")->display($context);
        // line 46
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "DarkRisesWebBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 46,  136 => 45,  133 => 44,  128 => 31,  125 => 30,  121 => 26,  118 => 25,  115 => 24,  111 => 22,  100 => 13,  97 => 12,  93 => 9,  90 => 8,  87 => 7,  81 => 47,  79 => 44,  74 => 41,  72 => 40,  63 => 33,  61 => 30,  56 => 27,  54 => 24,  51 => 23,  49 => 20,  43 => 17,  37 => 12,  33 => 10,  31 => 7,  23 => 1,  164 => 99,  161 => 98,  151 => 91,  144 => 88,  141 => 87,  131 => 80,  108 => 21,  105 => 20,  92 => 48,  70 => 29,  62 => 24,  55 => 20,  39 => 15,  32 => 4,  29 => 3,);
    }
}
