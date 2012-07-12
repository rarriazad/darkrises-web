<?php

/* DarkRisesWebBundle:Default:menu.html.twig */
class __TwigTemplate_f7cd635cf5820bec71ec5aac032167c8 extends Twig_Template
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
\t<div class=\"header page\">
\t\t<div class=\"head\">
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
\t\t\t\t\t<div class=\"login-inside\">
\t\t\t\t\t\t";
        // line 32
        if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
        if (($_facebook_ == null)) {
            // line 33
            echo "\t\t\t\t\t\t<span class=\"facebook-button\"><fb:login-button class=\"facebook-button\" size=\"large\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("facebook", array(), "messages");
            echo "</fb:login-button></span>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t\t\t<div class=\"facebook-button-login\">
\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t<img src=\"https://graph.facebook.com/";
            // line 38
            if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_facebook_, "username", array(), "array"), "html", null, true);
            echo "/picture\" id=\"facebook-picture\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t";
            // line 41
            if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_facebook_, "name", array(), "array"), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 44
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
        return array (  99 => 44,  85 => 38,  71 => 32,  64 => 28,  58 => 25,  52 => 22,  46 => 19,  40 => 16,  34 => 13,  26 => 8,  22 => 2,  17 => 1,  139 => 46,  136 => 45,  133 => 44,  128 => 31,  125 => 30,  121 => 26,  118 => 25,  115 => 24,  111 => 22,  100 => 13,  97 => 12,  93 => 9,  90 => 8,  87 => 7,  81 => 36,  79 => 44,  74 => 33,  72 => 40,  63 => 33,  61 => 30,  56 => 27,  54 => 24,  51 => 23,  49 => 20,  43 => 17,  37 => 12,  33 => 10,  31 => 7,  23 => 1,  164 => 99,  161 => 98,  151 => 91,  144 => 88,  141 => 87,  131 => 80,  108 => 21,  105 => 20,  92 => 41,  70 => 29,  62 => 24,  55 => 20,  39 => 15,  32 => 4,  29 => 3,);
    }
}
