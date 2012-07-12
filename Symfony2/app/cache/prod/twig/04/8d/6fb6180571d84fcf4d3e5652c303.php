<?php

/* DarkRisesWebBundle:Default:css.html.twig */
class __TwigTemplate_048d6fb6180571d84fcf4d3e5652c303 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" media=\"all\" type=\"text/css\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/oocss/template.css"), "html", null, true);
        echo "\" media=\"all\" type=\"text/css\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/oocss/grids.css"), "html", null, true);
        echo "\" media=\"all\" type=\"text/css\" rel=\"stylesheet\">";
    }

    public function getTemplateName()
    {
        return "DarkRisesWebBundle:Default:css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  17 => 1,  139 => 46,  136 => 45,  133 => 44,  128 => 31,  125 => 30,  121 => 26,  118 => 25,  115 => 24,  111 => 22,  100 => 13,  97 => 12,  93 => 9,  90 => 8,  87 => 7,  81 => 47,  79 => 44,  74 => 41,  72 => 40,  63 => 33,  61 => 30,  56 => 27,  54 => 24,  51 => 23,  49 => 20,  43 => 17,  37 => 12,  33 => 10,  31 => 7,  23 => 1,  164 => 99,  161 => 98,  151 => 91,  144 => 88,  141 => 87,  131 => 80,  108 => 21,  105 => 20,  92 => 48,  70 => 29,  62 => 24,  55 => 20,  39 => 15,  32 => 4,  29 => 3,);
    }
}
