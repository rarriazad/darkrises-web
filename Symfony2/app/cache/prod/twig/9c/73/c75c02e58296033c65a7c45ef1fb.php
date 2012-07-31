<?php

/* DarkRisesWebBundle:Default:menu.html.twig */
class __TwigTemplate_9c73c75c02e58296033c65a7c45ef1fb extends Twig_Template
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
        echo "<div class=\"menu\">
\t<div class=\"header\">
\t\t<div>
\t\t\t<ul class=\"nav\">
\t\t\t\t<li>
\t\t\t\t\t<div class=\"menu-buttons button-inicio\">
\t\t\t\t\t\t<a href=\"/inicio/\" class=\"menu-buttons\">
\t\t\t\t\t\t\t<div class=\"menu-buttons-inside\"> ";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Inicio", array(), "messages");
        echo "  </div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li><div class=\"menu-buttons button-guia\"><a href=\"/guia/\" class=\"menu-buttons\">
\t\t\t\t\t<div class=\"menu-buttons-inside\"> ";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Guia del Juego", array(), "messages");
        echo "  </div>
\t\t\t\t</a></div></li>
\t\t\t\t<li><div class=\"menu-buttons button-media\"><a href=\"/media/\" class=\"menu-buttons\">
\t\t\t\t\t<div class=\"menu-buttons-inside\"> ";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Media", array(), "messages");
        echo "  </div>
\t\t\t\t</a></div></li>
\t\t\t\t<li><div class=\"menu-buttons button-comunidad\"><a class=\"menu-buttons\">
\t\t\t\t\t<div class=\"menu-buttons-inside off\"> ";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Comunidad", array(), "messages");
        echo "  </div>
\t\t\t\t</a></div></li>
\t\t\t\t<li><div class=\"menu-buttons button-biblioteca\"><a class=\"menu-buttons\">
\t\t\t\t\t<div class=\"menu-buttons-inside off\"> ";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("Biblioteca", array(), "messages");
        echo "  </div>
\t\t\t\t</a></div></li>
\t\t\t\t<li><div class=\"menu-buttons button-comprar\"><a class=\"menu-buttons\">
\t\t\t\t\t<div class=\"menu-buttons-inside off\"> ";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("Comprar", array(), "messages");
        echo "  </div>
\t\t\t\t</a></div></li>
\t\t\t\t<li><div class=\"menu-buttons button-eventos\"><a href=\"/eventos/\" class=\"menu-buttons\">
\t\t\t\t\t<div class=\"menu-buttons-inside\"> ";
        // line 28
        echo $this->env->getExtension('translator')->getTranslator()->trans("Eventos", array(), "messages");
        echo "  </div>
\t\t\t\t</a></div></li>
\t\t\t\t<li><div class=\"login\">
\t\t\t\t\t<div class=\"login-inside\" id=\"facebook\">
\t\t\t\t\t\t";
        // line 32
        if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
        if (($_facebook_ == null)) {
            // line 33
            echo "\t\t\t\t\t\t<span class=\"facebook-button\">
\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t<img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/botones/facebook-empty.png"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"right padding-top\">
\t\t\t\t\t\t\t<div id=\"auth-loginlink\"><div id=\"auth-loginlink-inside\">";
            // line 38
            echo $this->env->getExtension('translator')->getTranslator()->trans("facebook", array(), "messages");
            echo "</div></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class=\"facebook-button-login\" style=\"display: none\">
\t\t\t\t\t\t<div class=\"left facebook-photo\">
\t\t\t\t\t\t\t<img src=\"https://graph.facebook.com/";
            // line 43
            if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_facebook_, "username", array(), "array"), "html", null, true);
            echo "/picture\" id=\"facebook-picture\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<p id=\"facebook-name\">";
            // line 46
            if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_facebook_, "first_name", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t<div class=\"facebook-logout\">";
            // line 48
            echo $this->env->getExtension('translator')->getTranslator()->trans("Cerrar Sesión", array(), "messages");
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t\t<span class=\"facebook-button\" style=\"display: none\">
\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t<img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/botones/facebook-empty.png"), "html", null, true);
            echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"right padding-top\">
\t\t\t\t\t\t\t<div id=\"auth-loginlink\"><div id=\"auth-loginlink-inside\">";
            // line 57
            echo $this->env->getExtension('translator')->getTranslator()->trans("facebook", array(), "messages");
            echo "</div></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class=\"facebook-button-login\">
\t\t\t\t\t\t<div class=\"left facebook-photo\">
\t\t\t\t\t\t\t<img src=\"https://graph.facebook.com/";
            // line 62
            if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_facebook_, "username", array(), "array"), "html", null, true);
            echo "/picture\" id=\"facebook-picture\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<p id=\"facebook-name\">";
            // line 65
            if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_facebook_, "first_name", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t<div class=\"facebook-logout\">";
            // line 67
            echo $this->env->getExtension('translator')->getTranslator()->trans("Cerrar Sesión", array(), "messages");
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t</div>
\t\t\t\t</div></li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "DarkRisesWebBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 67,  116 => 54,  112 => 52,  84 => 38,  74 => 33,  58 => 25,  52 => 22,  46 => 19,  40 => 16,  26 => 8,  22 => 2,  17 => 1,  198 => 61,  195 => 60,  192 => 59,  185 => 56,  182 => 55,  176 => 50,  171 => 48,  158 => 46,  152 => 44,  147 => 36,  144 => 35,  137 => 65,  130 => 62,  123 => 30,  120 => 29,  110 => 25,  107 => 24,  102 => 17,  99 => 46,  92 => 43,  89 => 11,  81 => 59,  76 => 55,  73 => 54,  71 => 32,  67 => 42,  64 => 28,  62 => 28,  59 => 27,  57 => 24,  47 => 19,  45 => 16,  41 => 14,  39 => 11,  200 => 79,  197 => 78,  194 => 77,  188 => 57,  183 => 71,  178 => 70,  173 => 49,  168 => 47,  165 => 46,  160 => 52,  155 => 45,  150 => 71,  145 => 58,  140 => 56,  135 => 35,  132 => 54,  127 => 31,  122 => 57,  117 => 28,  113 => 26,  109 => 45,  105 => 48,  100 => 43,  95 => 13,  91 => 40,  87 => 39,  83 => 62,  78 => 35,  75 => 36,  70 => 34,  65 => 31,  51 => 21,  37 => 7,  34 => 13,  30 => 4,  27 => 1,);
    }
}
