<?php

/* DarkRisesWebBundle:Default:idioma.html.twig */
class __TwigTemplate_856fed7f37d46681cb18f7b685cf39c7 extends Twig_Template
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
        echo "<div id=\"idioma\">
\t";
        // line 2
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "session"), "locale") == "es")) {
            // line 3
            echo "\t<div id=\"selected-idioma\" class=\"idioma idioma-spanish\"></div>
\t";
        } elseif (($this->getAttribute($this->getAttribute($_app_, "session"), "locale") == "en")) {
            // line 5
            echo "\t<div id=\"selected-idioma\" class=\"idioma idioma-english\"></div>
\t";
        }
        // line 7
        echo "\t<div id=\"flecha-idioma\" class=\"flecha-arriba\"/></div>
\t<div id=\"select-idioma\">
\t\t";
        // line 9
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "session"), "locale") != "es")) {
            // line 10
            echo "\t\t<a href=\"";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, strtr(strtr(("/es//" . $this->getAttribute($this->getAttribute($_app_, "request"), "getRequestUri")), array((("/" . $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_locale"), "method")) . "/") => "")), array("//" => "/")), "html", null, true);
            echo "\" class=\"idioma-spanish idioma\"></a>
\t\t";
        }
        // line 12
        echo "\t\t";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "session"), "locale") != "en")) {
            // line 13
            echo "\t\t<a href=\"";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, strtr(strtr(("/en//" . $this->getAttribute($this->getAttribute($_app_, "request"), "getRequestUri")), array((("/" . $this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_locale"), "method")) . "/") => "")), array("//" => "/")), "html", null, true);
            echo "\" class=\"idioma-english idioma\"></a>
\t\t";
        }
        // line 15
        echo "\t</div>
</div>
<div class=\"botones\">
\t<div class=\"inside-botones\">
\t\t<div class=\"ir-al-juego\"><div class=\"ir-al-juego-inside\">";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Ir al Juego", array(), "messages");
        echo "</div></div>
\t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/lastSeal.png"), "html", null, true);
        echo "\"/>
\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/twitter.png"), "html", null, true);
        echo "\"/>
\t</div>
</div>
<div class=\"breadcrums\">
\t<div class=\"inside-breadcrums\">
\t\t";
        // line 26
        if (isset($context["breadcrums"])) { $_breadcrums_ = $context["breadcrums"]; } else { $_breadcrums_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_breadcrums_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["crum"]) {
            // line 27
            echo "\t\t\t";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "last")) {
                // line 28
                echo "\t\t\t\t<span class=\"white\">";
                if (isset($context["crum"])) { $_crum_ = $context["crum"]; } else { $_crum_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_crum_, "crum")), "html", null, true);
                echo " </span> 
\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t<a href=\"";
                if (isset($context["crum"])) { $_crum_ = $context["crum"]; } else { $_crum_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_crum_, "address"), "html", null, true);
                echo "\" class=\"yellow\">";
                if (isset($context["crum"])) { $_crum_ = $context["crum"]; } else { $_crum_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_crum_, "crum")), "html", null, true);
                echo " > </a>
\t\t\t";
            }
            // line 32
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crum'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "DarkRisesWebBundle:Default:idioma.html.twig";
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
