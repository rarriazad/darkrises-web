<?php

/* DarkRisesWebBundle:Default:inicio.html.twig */
class __TwigTemplate_2a54a412cefdf42b1bcb9f3b1131d9f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DarkRisesWebBundle:Default:base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'lightboxes' => array($this, 'block_lightboxes'),
            'hidden' => array($this, 'block_hidden'),
            'footer' => array($this, 'block_footer'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style type=\"text/css\">
\t\t.inicio-quees{
\t\t\tbackground: url(\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/inicio/quees/off.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t\twidth: 456px;
\t\t\theight: 139px;
\t\t}
\t\t.inicio-quees-inside{
\t\t\tfont-family: copperplate, serif;
\t\t\tfont-size: 30px;
\t\t\tpadding-top: 35px;
\t\t\tpadding-left: 160px;
\t\t\ttext-align: center;
\t\t\tcolor: white;
\t\t}
\t\t.inicio-quees-over{
\t\t\tbackground: url(\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/inicio/quees/on.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t
\t\t.inicio-pack{
\t\t\tbackground: url(\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/inicio/pack/off.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t\twidth: 456px;
\t\t\theight: 139px;
\t\t}
\t\t.inicio-pack-over{
\t\t\tbackground: url(\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/inicio/pack/on.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.inicio-pack-inside{
\t\t\tfont-family: copperplate, serif;
\t\t\tfont-size: 18px;
\t\t\tpadding-top: 45px;
\t\t\tpadding-left: 10px;
\t\t\ttext-align: center;
\t\t\tcolor: white;
\t\t}
\t\t
\t\t.red-glow{
\t\t\tfilter: glow(color=#c00000,strength=3);
\t\t\ttext-shadow: 0 0 0.2em #c00000, 0 0 0.2em #c00000, 0 0 0.2em #c00000;
\t\t}
\t\t
\t\t.principiante{
\t\t\twidth: 799px;
\t\t\theight: 1034px;
\t\t\tbackground: url(\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/inicio/fondo-principiante.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t
\t\th1{
\t\t\tfont-size: 48px;
\t\t\ttext-transform: capitalize;
\t\t}
\t\t
\t\t.popup-info{
\t\t\twidth: 620px;
\t\t\ttext-align: left;
\t\t}
\t\t
\t\t.popup-info td{
\t\t\twidth: 30%;
\t\t}
\t\t
\t\t#twitter{
\t\t\tbackground: url(\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/fondo-twitter.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t\twidth: 295px;
\t\t\theight: 463px;
\t\t\tpadding-left: 50px;
\t\t\ttext-align: center;
\t\t}
\t\t
\t\t#twtr-widget-1{
\t\t\tpadding-top: 50px;\t
\t\t}

\t\t.principiante-popup{
\t\t\tcursor: pointer;
\t\t}
\t</style>
";
    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        // line 84
        echo "     <div class=\"video-trailer\"> 
     \t<div id=\"video\">
           <object class=\"video\" id=\"smluiswf0\" data=\"https://www.youtube.com/watch?v=VmxJJxRNArg?version=3&amp;feature=player_embedded&amp;autohide=1&amp;autoplay=0&amp;fs=1&amp;loop=0&amp;rel=0\" waitforclick=\"false\" wmode=\"transparent\" quality=\"high\" allowscriptaccess=\"always\" type=\"application/x-shockwave-flash\">
              <param value=\"smluiswf0\" name=\"id\">
              <param value=\"https://www.youtube.com/v/VmxJJxRNArg?version=3&amp;feature=player_embedded&amp;autohide=1&amp;autoplay=0&amp;fs=1&amp;loop=0&amp;rel=0\" name=\"swfSrc\">
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
     \t<div class=\"inside-info\">
     \t\t<div class=\"left text-center\">
\t\t\t\t<a href=\"/guia/queues/\"/>
\t\t\t\t\t<div class=\"inicio-quees\"/>
\t\t\t\t\t\t<div class=\"inicio-quees-inside\">
\t\t\t\t\t\t\t¿Qué es <br/> Dark Rises?\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<div id=\"fb\">
\t\t\t\t\t<iframe src=\"//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fdarkrises2012&amp;width=292&amp;height=590&amp;colorscheme=dark&amp;show_faces=true&amp;border_color&amp;stream=true&amp;header=true&amp;appId=274960540130\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:292px; height:590px;\" allowTransparency=\"true\"></iframe>
\t\t\t\t</div>
\t\t
\t\t\t</div>
\t\t\t<div class=\"right text-center\">
\t\t\t<a href=\"#facebook\" class=\"link-to-login\">
\t\t\t\t\t<div class=\"inicio-pack clear\"/>
\t\t\t\t\t\t<div class=\"inicio-pack-inside\">
\t\t\t\t\t\t\t¡Registrate y obtén el <br/> Pack de Principiante!\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<a id=\"principiante-popup\" href=\"#principiante\" class=\"yellow\"> ";
        // line 122
        echo $this->env->getExtension('translator')->getTranslator()->trans("¿Qué es esto?", array(), "messages");
        echo "</a>
\t\t\t\t
\t\t\t\t<div id=\"twitter\"><script charset=\"utf-8\" src=\"http://widgets.twimg.com/j/2/widget.js\"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 3,
  interval: 30000,
  width: 245,
  height: 343,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#4aed05'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('dark_rises').start();
</script></div>
\t\t\t\t\t</div>
\t\t</div>
     </div>
 ";
    }

    // line 157
    public function block_lightboxes($context, array $blocks = array())
    {
        // line 158
        echo " \t";
        $this->displayParentBlock("lightboxes", $context, $blocks);
        echo "
 \t<div class=\"shadow-inside principiante yellow text-center\" id=\"principiante\"/>
 \t\t<div class=\"shadow-padding\">
\t\t\t<h1 class=\"copperplate\"> ";
        // line 161
        echo $this->env->getExtension('translator')->getTranslator()->trans("Pack de Principiante", array(), "messages");
        echo "</h1>
\t\t\t<p> Dark Rises es un juego que por el momento aún no está funcional en las redes sociales, es por eso que si te registras ahora, y como muestra de agradecimiento a la buena fe de nuestro juego, le regalaremos un pack de principiante que constará de todos los objetos que se listan a continuación. </p>
\t\t\t<div class=\"left\">
\t\t\t\t<img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/inicio/popup/guantes.png"), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"left popup-info\">
\t\t\t\t<span class=\"yellow\"> GUANTES NIVEL 2 (mejorado +8) </span>
\t\t\t\t<table class=\"white\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td> Mejoras </td>
\t\t\t\t\t\t<td> +0 </td>
\t\t\t\t\t\t<td> +8 </td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td> Defensa </td>
\t\t\t\t\t\t<td> 1 </td>
\t\t\t\t\t\t<td> 9 </td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"left clear\">
\t\t\t\t<img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/inicio/popup/calzado.png"), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"left popup-info\">
\t\t\t\t<span class=\"yellow\"> CALZADO NIVEL 3 (mejorado +8) </span>
\t\t\t\t<table class=\"white\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td> Mejoras </td>
\t\t\t\t\t\t<td> +0 </td>
\t\t\t\t\t\t<td> +8 </td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td> Def. Mágica </td>
\t\t\t\t\t\t<td> 1 </td>
\t\t\t\t\t\t<td> 9 </td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"left clear\">
\t\t\t\t<img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/inicio/popup/canillera.png"), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"left popup-info\">
\t\t\t\t<span class=\"yellow\"> PROTECTOR LIGERO NIVEL 1 (mejorado +8) </span>
\t\t\t\t<table class=\"white\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td> Mejoras </td>
\t\t\t\t\t\t<td> +0 </td>
\t\t\t\t\t\t<td> +8 </td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td> Defensa </td>
\t\t\t\t\t\t<td> 2 </td>
\t\t\t\t\t\t<td> 18 </td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td> Def. Mágica </td>
\t\t\t\t\t\t<td> 2 </td>
\t\t\t\t\t\t<td> 18 </td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"left clear\">
\t\t\t\t<img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/inicio/popup/cuchillo.png"), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"left popup-info\">
\t\t\t\t<span class=\"yellow\"> CUCHILLO NIVEL 1 (mejorado +8) </span>
\t\t\t\t<table class=\"white\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td> Mejoras </td>
\t\t\t\t\t\t<td> +0 </td>
\t\t\t\t\t\t<td> +8 </td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td> Daño</td>
\t\t\t\t\t\t<td> 30 - 40 </td>
\t\t\t\t\t\t<td> 78 - 96 </td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td> Daño Mágico </td>
\t\t\t\t\t\t<td> 30 - 40 </td>
\t\t\t\t\t\t<td> 78 - 96 </td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"left clear\">
\t\t\t\t<img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/inicio/popup/bono.png"), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"left popup-info\">
\t\t\t\t<span class=\"yellow\"> ESPACIO EXTRA PARA BONO EN EQUIPO </span>
\t\t\t\t<p class=\"white\"> Con la energía de manos hábiles, obtendrás un nuevo espacio para insertar un bono adicional a tu equipo y mejorarlo más aún para tener un equipo único.</p>
\t\t\t</div>
\t\t\t<div class=\"left clear\">
\t\t\t\t<img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/inicio/popup/fondo.png"), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"left popup-info\">
\t\t\t\t<span class=\"yellow\"> FONDO EXCLUSIVO PARA AVATAR </span>
\t\t\t\t<p class=\"white\">Este fondo sólo lo tendrán las personas que obtuvieron este pack, fondo limitado y de colección para los jugadores.</p>
\t\t\t</div>
\t\t\t<p class=\"clear\"> Para registrarte, lo único que debes hacer es iniciar tu sesión de Facebook en nuestra página. Muchas gracias por el apoyo y esperamos que pronto estén divirtiéndose junto a nosotros. </p>
\t\t</div>
\t</div>
 ";
    }

    // line 264
    public function block_hidden($context, array $blocks = array())
    {
        // line 265
        echo " \t";
        $this->displayParentBlock("hidden", $context, $blocks);
        echo "
 \t<img src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/inicio/pack/on.png"), "html", null, true);
        echo "\" />
 \t<img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/inicio/quees/on.png"), "html", null, true);
        echo "\" />
 ";
    }

    // line 270
    public function block_footer($context, array $blocks = array())
    {
        // line 271
        echo " \t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
 \t<img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/credits.png"), "html", null, true);
        echo "\" class=\"credits\" />
 ";
    }

    // line 275
    public function block_javascript($context, array $blocks = array())
    {
        // line 276
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\t\$(\"#document\").ready(
\t\t\tfunction(){
\t\t\t\t\$(\"#principiante-popup\").click(
\t\t\t\t\tfunction(e){
\t\t\t\t\t\t\$(\".shadow\").show();
\t\t\t\t\t\t\$(\".principiante\").show();
\t\t\t\t\t}
\t\t\t\t);
\t\t\t
\t\t\t\t\$(\".inicio-quees\").hover(
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).addClass(\"inicio-quees-over\").find(\".inicio-quees-inside\").addClass(\"red-glow\");
\t\t\t\t\t},function(){
\t\t\t\t\t\t\$(this).removeClass(\"inicio-quees-over\").find(\".inicio-quees-inside\").removeClass(\"red-glow\");
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\t
\t\t\t\t\$(\".inicio-pack\").hover(
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).addClass(\"inicio-pack-over\").find(\".inicio-pack-inside\").addClass(\"red-glow\");
\t\t\t\t\t},function(){
\t\t\t\t\t\t\$(this).removeClass(\"inicio-pack-over\").find(\".inicio-pack-inside\").removeClass(\"red-glow\");
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\t
\t\t\t\t\$(\".link-to-login\").click(function(){\$(\"#auth-loginlink\").css(\"border\", \"solid 3px #cfcf74\")})
\t\t\t}
\t\t);
\t</script>
";
    }

    public function getTemplateName()
    {
        return "DarkRisesWebBundle:Default:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 276,  382 => 275,  376 => 272,  371 => 271,  368 => 270,  362 => 267,  358 => 266,  353 => 265,  350 => 264,  336 => 253,  326 => 246,  300 => 223,  274 => 200,  253 => 182,  232 => 164,  226 => 161,  219 => 158,  216 => 157,  178 => 122,  138 => 84,  135 => 83,  115 => 66,  94 => 48,  72 => 29,  64 => 24,  57 => 20,  41 => 7,  34 => 4,  31 => 3,);
    }
}
