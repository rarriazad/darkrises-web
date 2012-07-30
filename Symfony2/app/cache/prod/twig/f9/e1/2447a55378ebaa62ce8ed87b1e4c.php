<?php

/* DarkRisesWebBundle:Default:media.html.twig */
class __TwigTemplate_f9e12447a55378ebaa62ce8ed87b1e4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DarkRisesWebBundle:Default:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DarkRisesWebBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "     <div class=\"video-trailer\"> 
     \t<div id=\"video\">
           ";
        // line 6
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "session"), "locale") == "es")) {
            // line 7
            echo "\t<object class=\"video\" id=\"smluiswf0\" data=\"https://www.youtube.com/v/VmxJJxRNArg?version=3&amp;feature=player_embedded&amp;autohide=1&amp;autoplay=0&amp;fs=1&amp;loop=0&amp;rel=0\" waitforclick=\"false\" wmode=\"transparent\" quality=\"high\" allowscriptaccess=\"always\" type=\"application/x-shockwave-flash\">
              <param value=\"smluiswf0\" name=\"id\">
              <param value=\"https://www.youtube.com/v/VmxJJxRNArg?version=3&amp;feature=player_embedded&amp;autohide=1&amp;autoplay=0&amp;fs=1&amp;loop=0&amp;rel=0\" name=\"swfSrc\">
              <param value=\"640\" name=\"width\">
              <param value=\"390\" name=\"height\">
              <param value=\"false\" name=\"waitforclick\">
              <param value=\"transparent\" name=\"wmode\">
              <param value=\"always\" name=\"allowscriptaccess\">
              <param value=\"true\" name=\"allowfullscreen\">
              <embed width=\"640\" height=\"390\" allowscriptaccess=\"always\" allowfullscreen=\"true\" type=\"application/x-shockwave-flash\" src=\"https://www.youtube.com/v/VmxJJxRNArg?version=3&amp;feature=player_embedded&amp;autohide=1&amp;autoplay=0&amp;fs=1&amp;loop=0&amp;rel=0\">
           </object>
\t";
        } elseif (($this->getAttribute($this->getAttribute($_app_, "session"), "locale") == "en")) {
            // line 19
            echo "\t<object class=\"video\" id=\"smluiswf0\" data=\"https://www.youtube.com/v/L7LZod_QwYE?version=3&amp;feature=player_embedded&amp;autohide=1&amp;autoplay=0&amp;fs=1&amp;loop=0&amp;rel=0\" waitforclick=\"false\" wmode=\"transparent\" quality=\"high\" allowscriptaccess=\"always\" type=\"application/x-shockwave-flash\">
              <param value=\"smluiswf0\" name=\"id\">
              <param value=\"https://www.youtube.com/v/L7LZod_QwYE?version=3&amp;feature=player_embedded&amp;autohide=1&amp;autoplay=0&amp;fs=1&amp;loop=0&amp;rel=0\" name=\"swfSrc\">
              <param value=\"640\" name=\"width\">
              <param value=\"390\" name=\"height\">
              <param value=\"false\" name=\"waitforclick\">
              <param value=\"transparent\" name=\"wmode\">
              <param value=\"always\" name=\"allowscriptaccess\">
              <param value=\"true\" name=\"allowfullscreen\">
              <embed width=\"640\" height=\"390\" allowscriptaccess=\"always\" allowfullscreen=\"true\" type=\"application/x-shockwave-flash\" src=\"https://www.youtube.com/v/L7LZod_QwYE?version=3&amp;feature=player_embedded&amp;autohide=1&amp;autoplay=0&amp;fs=1&amp;loop=0&amp;rel=0\">
           </object>
\t";
        }
        // line 31
        echo "       </div>
     </div>
     <div class=\"info\">
     \t<div class=\"h2\"><div class=\"inside-h2\">";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("Wallpaper", array(), "messages");
        echo "</div></div>
     \t<div class=\"inside-info\">
\t\t\t";
        // line 36
        if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
        if (($_facebook_ == null)) {
            // line 37
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini1.png"), "html", null, true);
            echo "\" />
\t\t\t<img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini2.png"), "html", null, true);
            echo "\" />
\t\t\t<img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini3.png"), "html", null, true);
            echo "\" />
\t\t\t<img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini4.png"), "html", null, true);
            echo "\" />
\t\t\t<a href=\"#facebook\" class=\"media-link link-to-login\"><div class=\"ver-mas\"><div class=\"ver-mas-inside-logout\">";
            // line 41
            echo $this->env->getExtension('translator')->getTranslator()->trans("LogininFacebook", array(), "messages");
            echo "</div></div></a>
\t\t\t";
        } else {
            // line 43
            echo "\t\t\t<a href=\"/media/wallpaper/\" class=\"media-link\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini1.png"), "html", null, true);
            echo "\" /></a>
\t\t\t<a href=\"/media/wallpaper/\" class=\"media-link\"><img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini2.png"), "html", null, true);
            echo "\" /></a>
\t\t\t<a href=\"/media/wallpaper/\" class=\"media-link\"><img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini3.png"), "html", null, true);
            echo "\" /></a>
\t\t\t<a href=\"/media/wallpaper/\" class=\"media-link\"><img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini4.png"), "html", null, true);
            echo "\" /></a>
\t\t\t<a href=\"/media/wallpaper/\" class=\"media-link\"><div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
            // line 47
            echo $this->env->getExtension('translator')->getTranslator()->trans("VerMas", array(), "messages");
            echo "</div></div></a>
\t\t\t";
        }
        // line 49
        echo "\t\t</div>
     </div>
     <!-- <div class=\"info\">
     \t<div class=\"h2\"><div class=\"inside-h2\">";
        // line 52
        echo $this->env->getExtension('translator')->getTranslator()->trans("Bestiario", array(), "messages");
        echo "</div></div>
     \t<div class=\"inside-info\">
     \t\t";
        // line 54
        if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
        if (($_facebook_ == null)) {
            // line 55
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/bestiario.png"), "html", null, true);
            echo "\" />
\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside-logout\">";
            // line 56
            echo $this->env->getExtension('translator')->getTranslator()->trans("LogininFacebook", array(), "messages");
            echo "</div></div>
\t\t\t";
        } else {
            // line 58
            echo "\t\t\t<a href=\"/media/bestiario/\" class=\"media-link\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/bestiario.png"), "html", null, true);
            echo "\" /></a>
\t\t\t<a href=\"/media/bestiario/\" class=\"media-link\"><div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
            // line 59
            echo $this->env->getExtension('translator')->getTranslator()->trans("VerMas", array(), "messages");
            echo "</div></div></a>
\t\t\t";
        }
        // line 61
        echo "     \t</div>
     </div> -->
     <div class=\"info\">
     \t<div class=\"h2\"><div class=\"inside-h2\">";
        // line 64
        echo $this->env->getExtension('translator')->getTranslator()->trans("Artwork", array(), "messages");
        echo "</div></div>
     \t<div class=\"inside-info\">
     \t\t";
        // line 66
        if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
        if (($_facebook_ == null)) {
            // line 67
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/monstruos.png"), "html", null, true);
            echo "\" />
\t\t\t<a href=\"#facebook\" class=\"media-link link-to-login\"><div class=\"ver-mas\"><div class=\"ver-mas-inside-logout\">";
            // line 68
            echo $this->env->getExtension('translator')->getTranslator()->trans("LogininFacebook", array(), "messages");
            echo "</div></div></a>
\t\t\t";
        } else {
            // line 70
            echo "\t\t\t<a href=\"/media/artwork/\" class=\"media-link\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/monstruos.png"), "html", null, true);
            echo "\" /></a>
\t\t\t<a href=\"/media/artwork/\" class=\"media-link\"><div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
            // line 71
            echo $this->env->getExtension('translator')->getTranslator()->trans("VerMas", array(), "messages");
            echo "</div></div></a>
\t\t\t";
        }
        // line 73
        echo "     \t</div>
     </div>
 ";
    }

    // line 77
    public function block_javascript($context, array $blocks = array())
    {
        // line 78
        echo "
\t";
        // line 79
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\t\$(\"#document\").ready(
\t\t\tfunction(){
\t\t\t\t\$(\".ver-mas\").hover(function(){\$(this).addClass(\"ver-mas-hover\");},function(){\$(this).removeClass(\"ver-mas-hover\");});
\t\t\t\t
\t\t\t\t\$(\".link-to-login\").click(function(){\$(\"#auth-loginlink\").css(\"border\", \"solid 3px #cfcf74\")})
\t\t\t}
\t\t);
\t</script>
";
    }

    public function getTemplateName()
    {
        return "DarkRisesWebBundle:Default:media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 79,  197 => 78,  194 => 77,  188 => 73,  183 => 71,  178 => 70,  173 => 68,  168 => 67,  165 => 66,  160 => 64,  155 => 61,  150 => 59,  145 => 58,  140 => 56,  135 => 55,  132 => 54,  127 => 52,  122 => 49,  117 => 47,  113 => 46,  109 => 45,  105 => 44,  100 => 43,  95 => 41,  91 => 40,  87 => 39,  83 => 38,  78 => 37,  75 => 36,  70 => 34,  65 => 31,  51 => 19,  37 => 7,  34 => 6,  30 => 4,  27 => 3,);
    }
}
