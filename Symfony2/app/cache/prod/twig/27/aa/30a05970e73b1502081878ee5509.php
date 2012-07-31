<?php

/* DarkRisesWebBundle:Default:base.html.twig */
class __TwigTemplate_27aa30a05970e73b1502081878ee5509 extends Twig_Template
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
            'main' => array($this, 'block_main'),
            'body' => array($this, 'block_body'),
            'end' => array($this, 'block_end'),
            'footer' => array($this, 'block_footer'),
            'hidden' => array($this, 'block_hidden'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!Doctype html>
<html xmlns:fb=\"http://www.facebook.com/2008/fbml\"
      xmlns:og=\"http://opengraphprotocol.org/schema/\">

<meta property=\"fb:app_id\" content=\"233902406664495\" />
<meta property=\"og:image\" content=\"http://photos-g.ak.fbcdn.net/photos-ak-snc7/v85006/135/233902406664495/app_1_233902406664495_865765470.gif\" />
<meta property=\"og:description\" content=\"La oscuridad se acerca.\" />
\t<head>
\t\t<title>Dark Rises</title>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t</head>
\t<body>
\t";
        // line 16
        $this->displayBlock('lightboxes', $context, $blocks);
        // line 19
        echo "\t\t<div class=\"page\">
\t\t\t<div class=\"head\">
\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Dark Rises\"/>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 24
        $this->displayBlock('menu', $context, $blocks);
        // line 27
        echo "\t\t<div class=\"page main-content\">
\t\t\t";
        // line 28
        $this->displayBlock('idioma', $context, $blocks);
        // line 31
        echo "\t\t\t";
        $this->displayBlock('main', $context, $blocks);
        // line 42
        echo "\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t\t";
        // line 44
        $this->displayBlock('end', $context, $blocks);
        // line 54
        echo "\t\t<div style=\"display: none;\">
\t\t\t";
        // line 55
        $this->displayBlock('hidden', $context, $blocks);
        // line 58
        echo "\t\t</div>
\t\t";
        // line 59
        $this->displayBlock('javascript', $context, $blocks);
        // line 62
        echo "\t\t
\t</body>
</html>";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "\t\t";
        $this->env->loadTemplate("DarkRisesWebBundle:Default:css.html.twig")->display($context);
        // line 13
        echo "\t\t";
    }

    // line 16
    public function block_lightboxes($context, array $blocks = array())
    {
        // line 17
        echo "\t\t<div class='shadow'></div>
\t";
    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        // line 25
        echo "\t\t  ";
        $this->env->loadTemplate("DarkRisesWebBundle:Default:menu.html.twig")->display($context);
        // line 26
        echo "\t\t";
    }

    // line 28
    public function block_idioma($context, array $blocks = array())
    {
        // line 29
        echo "\t\t\t\t";
        $this->env->loadTemplate("DarkRisesWebBundle:Default:idioma.html.twig")->display($context);
        // line 30
        echo "\t\t\t";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "\t\t\t<div class=\"body\">
\t\t\t\t
\t\t\t\t<div class=\"main\">
\t\t\t\t\t";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "\t\t\t\t\t
\t\t\t\t\t";
    }

    // line 44
    public function block_end($context, array $blocks = array())
    {
        // line 45
        echo "\t\t<div class=\"footer up\">
\t\t\t";
        // line 46
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "\t\t</div>
\t\t";
    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        // line 47
        echo "\t\t\t<div class=\"foot yellow\">
\t\t\t";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dark Rises y todas las imagenes asociadas con Dark Rises son propiedad de © Copyright 2012 Last Seal S A. Todos los Derechos Reservados", array(), "messages");
        // line 49
        echo "\t\t\t</div>
\t\t\t<img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/credits.png"), "html", null, true);
        echo "\" class=\"credits\" />
\t\t\t";
    }

    // line 55
    public function block_hidden($context, array $blocks = array())
    {
        // line 56
        echo "\t\t\t\t";
        $this->env->loadTemplate("DarkRisesWebBundle:Default:hideMenu.html.twig")->display($context);
        // line 57
        echo "\t\t\t";
    }

    // line 59
    public function block_javascript($context, array $blocks = array())
    {
        // line 60
        echo "\t\t\t";
        $this->env->loadTemplate("DarkRisesWebBundle:Default:javascriptMenu.html.twig")->display($context);
        // line 61
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
        return array (  198 => 61,  195 => 60,  192 => 59,  185 => 56,  182 => 55,  176 => 50,  171 => 48,  158 => 46,  152 => 44,  147 => 36,  144 => 35,  137 => 38,  130 => 32,  123 => 30,  120 => 29,  110 => 25,  107 => 24,  102 => 17,  99 => 16,  92 => 12,  89 => 11,  81 => 59,  76 => 55,  73 => 54,  71 => 44,  67 => 42,  64 => 31,  62 => 28,  59 => 27,  57 => 24,  47 => 19,  45 => 16,  41 => 14,  39 => 11,  200 => 79,  197 => 78,  194 => 77,  188 => 57,  183 => 71,  178 => 70,  173 => 49,  168 => 47,  165 => 46,  160 => 52,  155 => 45,  150 => 59,  145 => 58,  140 => 56,  135 => 35,  132 => 54,  127 => 31,  122 => 49,  117 => 28,  113 => 26,  109 => 45,  105 => 44,  100 => 43,  95 => 13,  91 => 40,  87 => 39,  83 => 62,  78 => 58,  75 => 36,  70 => 34,  65 => 31,  51 => 21,  37 => 7,  34 => 6,  30 => 4,  27 => 1,);
    }
}
