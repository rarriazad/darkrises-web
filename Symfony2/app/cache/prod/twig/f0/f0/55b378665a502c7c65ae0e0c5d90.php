<?php

/* DarkRisesWebBundle:Default:wallpaper.html.twig */
class __TwigTemplate_f0f055b378665a502c7c65ae0e0c5d90 extends Twig_Template
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
        echo "     <div class=\"info\">
     \t<div class=\"h2\"><div class=\"inside-h2\">";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("Wallpaper", array(), "messages");
        echo "</div></div>
     \t<div class=\"inside-info\">
     \t\t<div class=\"left\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/big01.png"), "html", null, true);
        echo "\" /> </div>
     \t\t<div class=\"right\">
\t\t\t\t<a href=\"/wallpaper/highres/1/800x600.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("800 x 600", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/1/1024x768.jpg\"  target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("1024 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/1/1280x800.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 800", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/1/1280x1024.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 1024", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/1/1336x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 22
        echo $this->env->getExtension('translator')->getTranslator()->trans("1336 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/1/1920x1080.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("1920 x 1080", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"inside-info\">
     \t\t<div class=\"left\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/big02.png"), "html", null, true);
        echo "\" /> </div>
     \t\t<div class=\"right\">
\t\t\t\t<a href=\"/wallpaper/highres/2/800x600.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("800 x 600", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/2/1024x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("1024 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/2/1280x800.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 39
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 800", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/2/1280x1024.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 42
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 1024", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/2/1336x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("1336 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/2/1920x1080.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("1920 x 1080", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"inside-info\">
     \t\t<div class=\"left\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/big03.png"), "html", null, true);
        echo "\" /> </div>
     \t\t<div class=\"right\">
\t\t\t\t<a href=\"/wallpaper/highres/3/800x600.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 56
        echo $this->env->getExtension('translator')->getTranslator()->trans("800 x 600", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/3/1024x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 59
        echo $this->env->getExtension('translator')->getTranslator()->trans("1024 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/3/1280x800.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 62
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 800", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/3/1280x1024.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 65
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 1024", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/3/1336x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 68
        echo $this->env->getExtension('translator')->getTranslator()->trans("1336 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/3/1920x1080.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 71
        echo $this->env->getExtension('translator')->getTranslator()->trans("1920 x 1080", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"inside-info\">
     \t\t<div class=\"left\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/big04.png"), "html", null, true);
        echo "\" /> </div>
     \t\t<div class=\"right\">
\t\t\t\t<a href=\"/wallpaper/highres/4/800x600.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 79
        echo $this->env->getExtension('translator')->getTranslator()->trans("800 x 600", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/4/1024x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 82
        echo $this->env->getExtension('translator')->getTranslator()->trans("1024 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/4/1280x800.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 85
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 800", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/4/1280x1024.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 88
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 1024", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/4/1336x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 91
        echo $this->env->getExtension('translator')->getTranslator()->trans("1336 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/4/1920x1080.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 94
        echo $this->env->getExtension('translator')->getTranslator()->trans("1920 x 1080", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"inside-info\">
     \t\t<div class=\"left\"><img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/big05.png"), "html", null, true);
        echo "\" /> </div>
     \t\t<div class=\"right\">
\t\t\t\t<a href=\"/wallpaper/highres/5/800x600.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 102
        echo $this->env->getExtension('translator')->getTranslator()->trans("800 x 600", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/5/1024x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 105
        echo $this->env->getExtension('translator')->getTranslator()->trans("1024 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/5/1280x800.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 108
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 800", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/5/1280x1024.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 111
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 1024", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/5/1336x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 114
        echo $this->env->getExtension('translator')->getTranslator()->trans("1336 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/5/1920x1080.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 117
        echo $this->env->getExtension('translator')->getTranslator()->trans("1920 x 1080", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"inside-info\">
     \t\t<div class=\"left\"><img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/big06.png"), "html", null, true);
        echo "\" /> </div>
     \t\t<div class=\"right\">
\t\t\t\t<a href=\"/wallpaper/highres/6/800x600.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 125
        echo $this->env->getExtension('translator')->getTranslator()->trans("800 x 600", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/6/1024x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 128
        echo $this->env->getExtension('translator')->getTranslator()->trans("1024 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/6/1280x800.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 131
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 800", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/6/1280x1024.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 134
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 1024", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/6/1336x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 137
        echo $this->env->getExtension('translator')->getTranslator()->trans("1336 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/6/1920x1080.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 140
        echo $this->env->getExtension('translator')->getTranslator()->trans("1920 x 1080", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"inside-info\">
     \t\t<div class=\"left\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/big07.png"), "html", null, true);
        echo "\" /> </div>
     \t\t<div class=\"right\">
\t\t\t\t<a href=\"/wallpaper/highres/7/800x600.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 148
        echo $this->env->getExtension('translator')->getTranslator()->trans("800 x 600", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/7/1024x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 151
        echo $this->env->getExtension('translator')->getTranslator()->trans("1024 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/7/1280x800.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 154
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 800", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/7/1280x1024.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 157
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 1024", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/7/1336x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 160
        echo $this->env->getExtension('translator')->getTranslator()->trans("1336 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/7/1920x1080.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 163
        echo $this->env->getExtension('translator')->getTranslator()->trans("1920 x 1080", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"inside-info\">
     \t\t<div class=\"left\"><img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/big08.png"), "html", null, true);
        echo "\" /> </div>
     \t\t<div class=\"right\">
\t\t\t\t<a href=\"/wallpaper/highres/8/800x600.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 171
        echo $this->env->getExtension('translator')->getTranslator()->trans("800 x 600", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/8/1024x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 174
        echo $this->env->getExtension('translator')->getTranslator()->trans("1024 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/8/1280x800.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 177
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 800", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/8/1280x1024.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 180
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 1024", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/8/1336x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 183
        echo $this->env->getExtension('translator')->getTranslator()->trans("1336 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/8/1920x1080.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 186
        echo $this->env->getExtension('translator')->getTranslator()->trans("1920 x 1080", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"inside-info\">
     \t\t<div class=\"left\"><img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/wallpaper/big09.png"), "html", null, true);
        echo "\" /> </div>
     \t\t<div class=\"right\">
\t\t\t\t<a href=\"/wallpaper/highres/9/800x600.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 194
        echo $this->env->getExtension('translator')->getTranslator()->trans("800 x 600", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/9/1024x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 197
        echo $this->env->getExtension('translator')->getTranslator()->trans("1024 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/9/1280x800.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 200
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 800", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/9/1280x1024.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 203
        echo $this->env->getExtension('translator')->getTranslator()->trans("1280 x 1024", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/9/1336x768.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 206
        echo $this->env->getExtension('translator')->getTranslator()->trans("1336 x 768", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t\t<a href=\"/wallpaper/highres/9/1920x1080.jpg\" target=\"_blank\">
\t\t\t\t\t<div class=\"ver-mas\"><div class=\"ver-mas-inside\">";
        // line 209
        echo $this->env->getExtension('translator')->getTranslator()->trans("1920 x 1080", array(), "messages");
        echo "</div></div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
     </div>
 ";
    }

    // line 216
    public function block_javascript($context, array $blocks = array())
    {
        // line 217
        echo "
\t";
        // line 218
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\t\$(\"#document\").ready(
\t\t\tfunction(){
\t\t\t\t\$(\".ver-mas\").hover(function(){\$(this).addClass(\"ver-mas-hover\");},function(){\$(this).removeClass(\"ver-mas-hover\");});
\t\t\t}
\t\t);
\t</script>
";
    }

    public function getTemplateName()
    {
        return "DarkRisesWebBundle:Default:wallpaper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 218,  439 => 217,  436 => 216,  426 => 209,  420 => 206,  414 => 203,  408 => 200,  402 => 197,  396 => 194,  390 => 191,  382 => 186,  376 => 183,  370 => 180,  364 => 177,  358 => 174,  352 => 171,  346 => 168,  338 => 163,  332 => 160,  326 => 157,  320 => 154,  314 => 151,  308 => 148,  302 => 145,  294 => 140,  288 => 137,  282 => 134,  276 => 131,  270 => 128,  264 => 125,  258 => 122,  250 => 117,  244 => 114,  238 => 111,  232 => 108,  226 => 105,  220 => 102,  214 => 99,  206 => 94,  200 => 91,  194 => 88,  188 => 85,  182 => 82,  176 => 79,  170 => 76,  162 => 71,  156 => 68,  150 => 65,  144 => 62,  138 => 59,  132 => 56,  126 => 53,  118 => 48,  112 => 45,  106 => 42,  100 => 39,  94 => 36,  88 => 33,  82 => 30,  74 => 25,  68 => 22,  62 => 19,  56 => 16,  50 => 13,  44 => 10,  38 => 7,  33 => 5,  30 => 4,  27 => 3,);
    }
}
