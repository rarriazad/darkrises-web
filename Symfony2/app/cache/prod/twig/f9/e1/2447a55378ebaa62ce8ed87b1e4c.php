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
           <object class=\"video\" id=\"smluiswf0\" data=\"https://www.youtube.com/v/EdXSKfnWWzo?version=3&amp;feature=player_embedded&amp;autohide=1&amp;autoplay=0&amp;fs=1&amp;loop=0&amp;rel=0\" waitforclick=\"false\" wmode=\"transparent\" quality=\"high\" allowscriptaccess=\"always\" type=\"application/x-shockwave-flash\">
              <param value=\"smluiswf0\" name=\"id\">
              <param value=\"https://www.youtube.com/v/EdXSKfnWWzo?version=3&amp;feature=player_embedded&amp;autohide=1&amp;autoplay=0&amp;fs=1&amp;loop=0&amp;rel=0\" name=\"swfSrc\">
              <param value=\"640\" name=\"width\">
              <param value=\"390\" name=\"height\">
              <param value=\"false\" name=\"waitforclick\">
              <param value=\"transparent\" name=\"wmode\">
              <param value=\"always\" name=\"allowscriptaccess\">
              <param value=\"true\" name=\"allowfullscreen\">
              <embed width=\"640\" height=\"390\" allowscriptaccess=\"always\" allowfullscreen=\"true\" type=\"application/x-shockwave-flash\" src=\"https://www.youtube.com/v/EdXSKfnWWzo?version=3&amp;feature=player_embedded&amp;autohide=1&amp;autoplay=0&amp;fs=1&amp;loop=0&amp;rel=0\">
           </object>
       </div>
     </div>
     <div class=\"info\">
     \t<div class=\"h2\"><div class=\"inside-h2\">";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("Wallpaper", array(), "messages");
        echo "</div></div>
     \t<div class=\"inside-info\">
\t\t\t";
        // line 22
        if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
        if (($_facebook_ == null)) {
            // line 23
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini1.png"), "html", null, true);
            echo "\" />
\t\t\t<img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini2.png"), "html", null, true);
            echo "\" />
\t\t\t<img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini3.png"), "html", null, true);
            echo "\" />
\t\t\t<img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini4.png"), "html", null, true);
            echo "\" />
\t\t\t<a href=\"#facebook\" class=\"media-link link-to-login\"><div class=\"ver-mas\"><div class=\"ver-mas-inside-logout\">";
            // line 27
            echo $this->env->getExtension('translator')->getTranslator()->trans("LogininFacebook", array(), "messages");
            echo "</div></div></a>
\t\t\t";
        } else {
            // line 29
            echo "\t\t\t<a href=\"/media/wallpaper/\" class=\"media-link\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini1.png"), "html", null, true);
            echo "\" /></a>
\t\t\t<a href=\"/media/wallpaper/\" class=\"media-link\"><img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini2.png"), "html", null, true);
            echo "\" /></a>
\t\t\t<a href=\"/media/wallpaper/\" class=\"media-link\"><img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini3.png"), "html", null, true);
            echo "\" /></a>
\t\t\t<a href=\"/media/wallpaper/\" class=\"media-link\"><img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/mini4.png"), "html", null, true);
            echo "\" /></a>
\t\t\t<a href=\"/media/wallpaper/\" class=\"media-link\"><div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
            // line 33
            echo $this->env->getExtension('translator')->getTranslator()->trans("VerMas", array(), "messages");
            echo "</div></div></a>
\t\t\t";
        }
        // line 35
        echo "\t\t</div>
     </div>
     <!-- <div class=\"info\">
     \t<div class=\"h2\"><div class=\"inside-h2\">";
        // line 38
        echo $this->env->getExtension('translator')->getTranslator()->trans("Bestiario", array(), "messages");
        echo "</div></div>
     \t<div class=\"inside-info\">
     \t\t";
        // line 40
        if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
        if (($_facebook_ == null)) {
            // line 41
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/bestiario.png"), "html", null, true);
            echo "\" />
\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside-logout\">";
            // line 42
            echo $this->env->getExtension('translator')->getTranslator()->trans("LogininFacebook", array(), "messages");
            echo "</div></div>
\t\t\t";
        } else {
            // line 44
            echo "\t\t\t<a href=\"/media/bestiario/\" class=\"media-link\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/bestiario.png"), "html", null, true);
            echo "\" /></a>
\t\t\t<a href=\"/media/bestiario/\" class=\"media-link\"><div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
            // line 45
            echo $this->env->getExtension('translator')->getTranslator()->trans("VerMas", array(), "messages");
            echo "</div></div></a>
\t\t\t";
        }
        // line 47
        echo "     \t</div>
     </div> -->
     <div class=\"info\">
     \t<div class=\"h2\"><div class=\"inside-h2\">";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("Artwork", array(), "messages");
        echo "</div></div>
     \t<div class=\"inside-info\">
     \t\t";
        // line 52
        if (isset($context["facebook"])) { $_facebook_ = $context["facebook"]; } else { $_facebook_ = null; }
        if (($_facebook_ == null)) {
            // line 53
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/monstruos.png"), "html", null, true);
            echo "\" />
\t\t\t<a href=\"#facebook\" class=\"media-link link-to-login\"><div class=\"ver-mas\"><div class=\"ver-mas-inside-logout\">";
            // line 54
            echo $this->env->getExtension('translator')->getTranslator()->trans("LogininFacebook", array(), "messages");
            echo "</div></div></a>
\t\t\t";
        } else {
            // line 56
            echo "\t\t\t<a href=\"/media/artwork/\" class=\"media-link\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/monstruos.png"), "html", null, true);
            echo "\" /></a>
\t\t\t<a href=\"/media/artwork/\" class=\"media-link\"><div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
            // line 57
            echo $this->env->getExtension('translator')->getTranslator()->trans("VerMas", array(), "messages");
            echo "</div></div></a>
\t\t\t";
        }
        // line 59
        echo "     \t</div>
     </div>
 ";
    }

    // line 63
    public function block_javascript($context, array $blocks = array())
    {
        // line 64
        echo "
\t";
        // line 65
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
        return array (  178 => 65,  175 => 64,  172 => 63,  166 => 59,  161 => 57,  156 => 56,  151 => 54,  146 => 53,  143 => 52,  138 => 50,  133 => 47,  128 => 45,  123 => 44,  118 => 42,  113 => 41,  110 => 40,  105 => 38,  100 => 35,  95 => 33,  91 => 32,  87 => 31,  83 => 30,  78 => 29,  73 => 27,  69 => 26,  65 => 25,  61 => 24,  56 => 23,  53 => 22,  48 => 20,  30 => 4,  27 => 3,);
    }
}
