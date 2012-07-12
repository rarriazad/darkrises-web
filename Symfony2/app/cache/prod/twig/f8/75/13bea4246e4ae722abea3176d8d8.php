<?php

/* DarkRisesWebBundle:Default:javascriptMenu.html.twig */
class __TwigTemplate_f87513bea4246e4ae722abea3176d8d8 extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/facebook.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"http://cufon.shoqolate.com/js/cufon-yui.js?v=1.09i\" type=\"text/javascript\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/copperplate_700.font.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"http://code.jquery.com/jquery-1.7.2.min.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
\tjQuery(document).ready(
\t\tfunction(){
\t\t\tjQuery(\"#idioma\").click(
\t\t\t\tfunction(){
\t\t\t\t\tselect = jQuery(\"#select-idioma\");
\t\t\t\t\tif(select.css(\"display\") == \"block\"){
\t\t\t\t\t\tselect.hide();
\t\t\t\t\t\t\$(\"#flecha-idioma\").removeClass(\"flecha-abajo\").addClass(\"flecha-arriba\");
\t\t\t\t\t}else{
\t\t\t\t\t\tselect.show();
\t\t\t\t\t\t\$(\"#flecha-idioma\").addClass(\"flecha-abajo\").removeClass(\"flecha-arriba\");
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);
\t\t\t
\t\t\tjQuery(\"#select-idioma\").click(function(){jQuery(\"#idioma\").click();});
\t\t\t
\t\t\t\$(\".idioma-english\").hover(function(){\$(this).addClass(\"idioma-english-hover\")},function(){\$(this).removeClass(\"idioma-english-hover\")});
\t\t\t\$(\".idioma-spanish\").hover(function(){\$(this).addClass(\"idioma-spanish-hover\")},function(){\$(this).removeClass(\"idioma-spanish-hover\")});
\t\t\t
\t\t\t\$(\".button-inicio\").hover(
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).addClass(\"button-inicio-on\").find(\".menu-buttons .menu-buttons-inside\").addClass(\"white\");
\t\t\t\t},
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).removeClass(\"button-inicio-on\").find(\".menu-buttons .menu-buttons-inside\").removeClass(\"white\");
\t\t\t\t}
\t\t\t);
\t\t\t
\t\t\t\$(\".button-guia\").hover(
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).addClass(\"button-guia-on\").find(\".menu-buttons .menu-buttons-inside\").addClass(\"white\");
\t\t\t\t},
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).removeClass(\"button-guia-on\").find(\".menu-buttons .menu-buttons-inside\").removeClass(\"white\");
\t\t\t\t}
\t\t\t);
\t\t\t
\t\t\t\$(\".button-media\").hover(
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).addClass(\"button-media-on\").find(\".menu-buttons .menu-buttons-inside\").addClass(\"white\");
\t\t\t\t},
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).removeClass(\"button-media-on\").find(\".menu-buttons .menu-buttons-inside\").removeClass(\"white\");
\t\t\t\t}
\t\t\t);
\t\t\t
\t\t\t\$(\".button-eventos\").hover(
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).addClass(\"button-eventos-on\").find(\".menu-buttons .menu-buttons-inside\").addClass(\"white\");
\t\t\t\t},
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).removeClass(\"button-eventos-on\").find(\".menu-buttons .menu-buttons-inside\").removeClass(\"white\");
\t\t\t\t}
\t\t\t);
\t\t\t
\t\t\t\$(\".shadow\").height(\$(\"body\").height()).click(
\t\t\t\tfunction(){
\t\t\t\t\t\$(this).hide();
\t\t\t\t\t\$(\".shadow-inside\").hide();
\t\t\t\t}
\t\t\t);
\t\t}
\t);
</script>";
    }

    public function getTemplateName()
    {
        return "DarkRisesWebBundle:Default:javascriptMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 32,  107 => 30,  96 => 27,  78 => 26,  66 => 20,  45 => 12,  38 => 10,  35 => 9,  27 => 5,  20 => 2,  99 => 44,  85 => 38,  71 => 32,  64 => 28,  58 => 25,  52 => 22,  46 => 19,  40 => 16,  34 => 13,  26 => 8,  22 => 2,  17 => 1,  139 => 46,  136 => 45,  133 => 44,  128 => 31,  125 => 30,  121 => 26,  118 => 25,  115 => 24,  111 => 22,  100 => 28,  97 => 12,  93 => 9,  90 => 8,  87 => 7,  81 => 36,  79 => 44,  74 => 33,  72 => 40,  63 => 33,  61 => 30,  56 => 15,  54 => 24,  51 => 23,  49 => 13,  43 => 17,  37 => 12,  33 => 10,  31 => 7,  23 => 3,  164 => 99,  161 => 98,  151 => 91,  144 => 88,  141 => 87,  131 => 33,  108 => 21,  105 => 20,  92 => 41,  70 => 21,  62 => 19,  55 => 20,  39 => 15,  32 => 4,  29 => 3,);
    }
}
