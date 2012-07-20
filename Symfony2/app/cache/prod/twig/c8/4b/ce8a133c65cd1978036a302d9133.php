<?php

/* DarkRisesWebBundle:Default:idioma.html.twig */
class __TwigTemplate_c84bce8a133c65cd1978036a302d9133 extends Twig_Template
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
        echo "\t<div id=\"flecha-idioma\" class=\"flecha-abajo\"/></div>
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
        echo "</div><div class=\"proximamente\">Próximamente </div></div>
\t\t<a href=\"http://www.lastseal.com\" target=\"_blank\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/lastSeal.png"), "html", null, true);
        echo "\"/></a>
\t\t<a href=\"https://twitter.com/dark_rises\" target=\"_blank\"> <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/twitter.png"), "html", null, true);
        echo "\"/> </a>
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
        return array (  131 => 33,  96 => 27,  70 => 21,  66 => 20,  49 => 13,  38 => 10,  35 => 9,  31 => 7,  23 => 3,  20 => 2,  134 => 65,  119 => 57,  109 => 52,  84 => 38,  74 => 33,  58 => 25,  52 => 22,  46 => 19,  40 => 16,  34 => 13,  26 => 8,  22 => 2,  17 => 1,  194 => 60,  191 => 59,  188 => 58,  184 => 56,  181 => 55,  173 => 49,  171 => 48,  168 => 47,  165 => 46,  160 => 51,  158 => 46,  155 => 45,  152 => 44,  147 => 36,  144 => 71,  137 => 38,  135 => 35,  130 => 32,  127 => 62,  120 => 29,  117 => 32,  107 => 30,  102 => 17,  99 => 46,  92 => 43,  89 => 11,  81 => 58,  76 => 54,  71 => 32,  67 => 42,  64 => 28,  62 => 19,  59 => 27,  57 => 24,  51 => 21,  47 => 19,  45 => 12,  41 => 14,  39 => 11,  178 => 54,  175 => 64,  172 => 63,  166 => 59,  161 => 57,  156 => 56,  151 => 54,  146 => 53,  143 => 52,  138 => 50,  133 => 47,  128 => 45,  123 => 30,  118 => 42,  113 => 54,  110 => 25,  105 => 38,  100 => 28,  95 => 13,  91 => 32,  87 => 31,  83 => 61,  78 => 26,  73 => 53,  69 => 26,  65 => 25,  61 => 24,  56 => 15,  53 => 22,  48 => 20,  30 => 4,  27 => 5,);
    }
}
