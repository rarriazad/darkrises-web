<?php

/* DarkRisesWebBundle:Default:css.html.twig */
class __TwigTemplate_b42586307b314f251fd4820d883db249 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fonts/copperplate/stylesheet.css"), "html", null, true);
        echo "\" media=\"all\" type=\"text/css\" rel=\"stylesheet\">
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" media=\"all\" type=\"text/css\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/oocss/template.css"), "html", null, true);
        echo "\" media=\"all\" type=\"text/css\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 4
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
        return array (  26 => 3,  22 => 2,  17 => 1,  191 => 59,  184 => 56,  181 => 55,  171 => 48,  158 => 46,  152 => 44,  147 => 36,  144 => 35,  137 => 38,  130 => 32,  123 => 30,  120 => 29,  110 => 25,  107 => 24,  102 => 17,  99 => 16,  92 => 12,  89 => 11,  81 => 58,  76 => 54,  73 => 53,  71 => 44,  67 => 42,  64 => 31,  62 => 28,  59 => 27,  57 => 24,  47 => 19,  45 => 16,  41 => 14,  39 => 11,  200 => 79,  197 => 78,  194 => 60,  188 => 58,  183 => 71,  178 => 54,  173 => 49,  168 => 47,  165 => 46,  160 => 51,  155 => 45,  150 => 59,  145 => 58,  140 => 56,  135 => 35,  132 => 54,  127 => 31,  122 => 49,  117 => 28,  113 => 26,  109 => 45,  105 => 44,  100 => 43,  95 => 13,  91 => 40,  87 => 39,  83 => 61,  78 => 57,  75 => 36,  70 => 34,  65 => 31,  51 => 21,  37 => 7,  34 => 6,  30 => 4,  27 => 1,);
    }
}
