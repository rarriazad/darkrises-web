<?php

/* DarkRisesWebBundle:Default:evento-sello.html.twig */
class __TwigTemplate_4cb7051b12c0804e19fc70f9573df96e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DarkRisesWebBundle:Default:base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'main' => array($this, 'block_main'),
            'lightboxes' => array($this, 'block_lightboxes'),
            'end' => array($this, 'block_end'),
            'javascript' => array($this, 'block_javascript'),
            'hidden' => array($this, 'block_hidden'),
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
\t\tbody{
\t\t\tbackground: url(\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/fondo-arriba.png"), "html", null, true);
        echo "\") no-repeat center top #000000 !important;
\t\t}
\t\t.main-content{
\t\t\tbackground: none !important;
\t\t}
\t\t.counter{
\t\t\tbackground: url(\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/piedra-arriba.png"), "html", null, true);
        echo "\") no-repeat center top;
\t\t\twidth: 979px;
\t\t\theight: 325px;
\t\t\tmargin-top: 60px;
\t\t\tmargin-right: 1000px;
\t\t\tpadding-top: 50px;
\t\t}
\t\t.sello{
\t\t\tbackground: url(\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/piedra-abajo.png"), "html", null, true);
        echo "\") no-repeat center top;
\t\t\twidth: 1029px;
\t\t\theight: 1372px;
\t\t\ttext-align: center;
\t\t\tmargin-top: 100px;
\t\t\tpadding-top: 150px;
\t\t}
\t\t.end{
\t\t\theight: 200px;
\t\t\tbackground: url(\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/fondo-abajo.png"), "html", null, true);
        echo "\") no-repeat center bottom;
\t\t}
\t\t.pop-up{
\t\t\twidth: 1000px;
\t\t\theight: 1293px;
\t\t\tbackground: url(\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/pop-fondo.png"), "html", null, true);
        echo "\") no-repeat center top;
\t\t\tmargin: auto;
\t\t}
\t\t.numeros{
\t\t\tbackground: url(\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/counter-fondo.png"), "html", null, true);
        echo "\") no-repeat center top;
\t\t\twidth: 485px;
\t\t\theight: 149px;
\t\t}
\t\t.margin{
\t\t\tmargin-left: 350px;
\t\t}
\t\t.cantidad{
\t\t\tletter-spacing: 24px;
\t\t\tpadding-top: 20px;
\t\t\tpadding-left: 40px;
\t\t\tfont-size: 100px;
\t\t}
\t\t.white-glow{
\t\t\tfilter: glow(color=#ffffff,strength=1);
\t\t\ttext-shadow: 0 0 0.1em #ffffff;
\t\t}
\t\t.black-glow{
\t\t\tfilter: glow(color=#000000,strength=1);
\t\t\ttext-shadow: 0 0 0.2em #000000;
\t\t}
\t\t.padding{
\t\t\tmargin-top: 150px;
\t\t}
\t\t.counter-popup{
\t\t\tcolor: #fe6000;
\t\t\ttext-align: center;
\t\t\tmargin-left: 300px;
\t\t\tcursor: pointer;
\t\t}
\t\t.shadow-padding{
\t\t\tpadding-right: 170px;
\t\t\tpadding-left: 170px;
\t\t\ttext-align: left;
\t\t}
\t\t.flash{
\t\t\twidth: 465px;
\t\t\theight: 440px;
\t\t\tmargin-top: 200px;
\t\t\tposition:relative;
\t\t\tz-index:1;
\t\t}
\t\t.flash-wrapper{
\t\t\tbackground: url(\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/background-sello.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t\tdisplay: block;
\t\t\tmargin-left: auto;
\t\t\tmargin-right: auto;
\t\t\twidth: 500px;
\t\t\theight: 500px;
\t\t\tpadding-top: 50px;
\t\t}
\t\t.sello-icons{
\t\t\tmargin-top: -430px;
\t\t\twidth: 465px;
\t\t\theight: 440px;
\t\t\tmargin-left: 30px;
\t\t\tmargin-right: auto;
\t\t\tposition: absolute;
\t\t\tz-index: 10;
\t\t}
\t\t.sello-icon-interrogacion{
\t\t\twidth: 60px;
\t\t\theight: 61px;
\t\t\tbackground: url(\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-interrogacion/off.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t\tmargin: auto;
\t\t\tdisplay: block;
\t\t\tmargin-top: 5px;
\t\t\tmargin-right: 206px;
\t\t}
\t\t.sello-icon-interrogacion-hover{
\t\t\tbackground: url(\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-interrogacion/over.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.sello-icon-key{
\t\t\twidth: 60px;
\t\t\theight: 77px;
\t\t\tbackground: url(\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-key/off.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t\tmargin: auto;
\t\t\tdisplay: block;
\t\t\tmargin-top: 17px;
\t\t\tmargin-right: 51px;
\t\t}
\t\t.sello-icon-key-hover{
\t\t\tbackground: url(\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-key/over.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t\t.sello-icon-media{
\t\t\twidth: 60px;
\t\t\theight: 77px;
\t\t\tbackground: url(\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-media/off.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t\tmargin: auto;
\t\t\tdisplay: block;
\t\t\tmargin-top: 50px;
\t\t\tmargin-right: 29px;
\t\t}
\t\t.sello-icon-key-media{
\t\t\tbackground: url(\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-media/over.png"), "html", null, true);
        echo "\") no-repeat center;
\t\t}
\t</style>
";
    }

    // line 138
    public function block_main($context, array $blocks = array())
    {
        // line 139
        echo "\t<div class=\"counter\">
\t\t<div class=\"numeros margin\">
\t\t\t<div class=\"cantidad copperplate white-glow\">
\t\t\t\t00000
\t\t\t</div>
\t\t</div>
\t\t<div class=\"counter-popup\">¿Qué es ésto?</div>
\t</div>
\t<div class=\"sello\">
\t\t<div class=\"flash-wrapper\">
\t\t <object id=\"FlashID\" class=\"flash\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" >
\t\t\t<param name=\"movie\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/animacionsello.swf"), "html", null, true);
        echo "\" />
\t\t\t<param name=\"quality\" value=\"high\" />
\t\t\t<param name=\"wmode\" value=\"transparent\" />
\t\t\t<param name=\"swfversion\" value=\"6.0.65.0\" />
\t\t\t<!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
\t\t\t<!-- <param name=\"expressinstall\" value=\"Scripts/expressInstall.swf\" /> -->
\t\t\t<param name=\"BGCOLOR\" value=\"#D6D6D6\" />
\t\t\t<!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
\t\t\t<!--[if !IE]>-->
\t\t\t<object type=\"application/x-shockwave-flash\" data=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/animacionsello.swf"), "html", null, true);
        echo "\" width=\"465\" height=\"440\">
\t\t\t  <!--<![endif]-->
\t\t\t  <param name=\"quality\" value=\"high\" />
\t\t\t  <param name=\"wmode\" value=\"transparent\" />
\t\t\t  <param name=\"swfversion\" value=\"6.0.65.0\" />
\t\t\t  <!--<param name=\"expressinstall\" value=\"Scripts/expressInstall.swf\" />-->
\t\t\t  <param name=\"BGCOLOR\" value=\"#D6D6D6\" />
\t\t\t  <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
\t\t\t  <div>
\t\t\t\t<h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
\t\t\t\t<p><a href=\"http://www.adobe.com/go/getflashplayer\"><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Obtener Adobe Flash Player\" width=\"112\" height=\"33\" /></a></p>
\t\t\t  </div>
\t\t\t  <!--[if !IE]>-->
\t\t\t</object>
\t\t<!--<![endif]-->
\t  </object>
\t   <div class=\"sello-icons\">
\t  \t<a class=\"sello-icon-interrogacion\" href=\"/guia/quees/\"></a>
\t  \t<a class=\"sello-icon-key\" href=\"/guia/quees/\"></a>
\t  \t<a class=\"sello-icon-media\" href=\"/media/\"></a>
\t  </div>
\t  </div>
\t 
\t</div>
";
    }

    // line 185
    public function block_lightboxes($context, array $blocks = array())
    {
        // line 186
        echo "\t";
        $this->displayParentBlock("lightboxes", $context, $blocks);
        echo "
\t<div class=\"shadow-inside pop-up text-center\" name=\"principiante\"/>
 \t\t<div class=\"shadow-padding\">
 \t\t\t<div class=\"numeros\">
\t\t\t\t<div class=\"cantidad copperplate white-glow\">
\t\t\t\t\t00000
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<p class=\"black-glow\">
\t\t\tTodo empezó una noche en que una estrella fugaz pasó por los cielos<br/>
\t\t\tsin que nadie supiera que era exactamente.<br/>
\t\t\t<br/>
\t\t\tCon el pasar de los días, muchos fenómenos extraños fueron ocurriendo,<br/>
\t\t\thechos bizarros y paranormales empezaron a aparecer en la prensa</br>
\t\t\tmundial.<br/>
\t\t\t<br/>
\t\t\tAvistamientos de criaturas sobrenaturales empezaron a hacerse<br/> 
\t\t\tmuy común, hasta tal punto que uno de ellas ha aparecido</br>
\t\t\tpara contar exactamente que ha ocurrido.<br/>
\t\t\t<br/>
\t\t\tUeyotl, como se hace llamar este ser, dice que previo al<br/>
\t\t\tpaso de esta estrella, algunas criaturas oscuras pedían<br/>
\t\t\tsacrificios para dar la posibilidad de juntar</br>
\t\t\talmas elegidas y tener la posibilidad de abrir un portal<br/>
\t\t\tque sólo sería posible si esas almas estuvieran<br/>
\t\t\trecolectadas antes del paso de la estrella fugaz.<br/>
\t\t\t<br/>
\t\t\tLa estrella ha pasado y el portal ha sido abierto,<br/>
\t\t\tmiles de criaturas han pasado a este mundo y corren <br/>
\t\t\tlibrememente por la noche dando rienda suelta a sus<br/>
\t\t\tdeseos de sangre.<br/>
\t\t\t<br/>
\t\t\tUeyotl dice que sólo hay una manera de cerrarlo y <br/>
\t\t\thacer que las criaturas se devuelvan a su dimensión.<br/>
\t\t\t<br/>
\t\t\tDebemos reunir la mayor cantidad de apoyo de todas<br/>
\t\t\tlas personas que lean estas líneas.</br>
\t\t\tLa condición es una sóla, inscribirse en esta página<br/>
\t\t\ta través de Facebook para que vayan recibiendo<br/>
\t\t\tnotícias de este evento.<br/>
\t\t\t<br/>
\t\t\tAdemás de eso, Ueyotl ha dicho que cada 2500<br/>
\t\t\tapoyos, él liberará un desafío para todos.<br/> 
\t\t\tNo sabemos en qué consiste dichos desafíos<br/>
\t\t\tpero sólo hay una manera de averiguarlo.<br/>
\t\t\t<br/>
\t\t\tÚnete a esta tarea y logremos cerrar el<br/> portal.<br/>
\t\t\t<br/>
\t\t\t</p>
 \t\t</div>
 \t</div>
";
    }

    // line 240
    public function block_end($context, array $blocks = array())
    {
        // line 241
        echo "\t<div class=\"end\">
\t</div>
\t";
        // line 243
        $this->displayParentBlock("end", $context, $blocks);
        echo "
";
    }

    // line 247
    public function block_javascript($context, array $blocks = array())
    {
        // line 248
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
\t<script type=\"text/javascript\">
\t\t\$(document).ready(
\t\t\tfunction(){
\t\t\t\t\$(\".counter-popup\").click(
\t\t\t\t\tfunction(e){
\t\t\t\t\t\t\$(\".shadow\").show();
\t\t\t\t\t\t\$(\".pop-up\").show();
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\t
\t\t\t\t\$(\".sello-icon-interrogacion\").hover(
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).addClass(\"sello-icon-interrogacion-hover\")
\t\t\t\t\t},
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).removeClass(\"sello-icon-interrogacion-hover\")
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\t\$(\".sello-icon-key\").hover(
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).addClass(\"sello-icon-key-hover\")
\t\t\t\t\t},
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).removeClass(\"sello-icon-key-hover\")
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\t\$(\".sello-icon-media\").hover(
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).addClass(\"sello-icon-key-media\")
\t\t\t\t\t},
\t\t\t\t\tfunction(){
\t\t\t\t\t\t\$(this).removeClass(\"sello-icon-key-media\")
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\tsetInterval(
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"http://lilith.darkrises.com/backend.php/userinfo/getsouls/\",
\t\t\t\t\t\ttype: \"GET\",
\t\t\t\t\t\tcrossDomain : true,
\t\t\t\t\t\tdataType: \"jsonp\",
\t\t\t\t\t\tsuccess: function(object){
\t\t\t\t\t\t\tif(object[\"souls\"] < 10000)
\t\t\t\t\t\t\t\tobject[\"souls\"] = \"00\" + object[\"souls\"];
\t\t\t\t\t\t\telse if(object[\"souls\"] < 1000)\t
\t\t\t\t\t\t\t\tobject[\"souls\"] = \"0\" + object[\"souls\"];
\t\t\t\t\t\t\t\$(\".cantidad\").html(object[\"souls\"]);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(){alert(\"Fail!\")}
\t\t\t\t\t})
\t\t\t\t\t,300000
\t\t\t\t);
\t\t\t});
\t</script>
\t";
        // line 302
        if (isset($context["session"])) { $_session_ = $context["session"]; } else { $_session_ = null; }
        if (($_session_ == "first")) {
            // line 303
            echo "\t<script type=\"text/javascript\">
\t\t\$(document).ready(
\t\t\tfunction(){
\t\t\t\t\$(\".counter-popup\").click();
\t\t\t}
\t\t);
\t</script>
\t";
        }
    }

    // line 313
    public function block_hidden($context, array $blocks = array())
    {
        // line 314
        echo "\t";
        $this->displayParentBlock("hidden", $context, $blocks);
        echo "
\t<img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-interrogacion/over.png"), "html", null, true);
        echo "\"/>
\t<img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-key/over.png"), "html", null, true);
        echo "\"/>
\t<img src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/eventos/sello/sello-icon-media/over.png"), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "DarkRisesWebBundle:Default:evento-sello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 317,  430 => 316,  426 => 315,  421 => 314,  418 => 313,  406 => 303,  403 => 302,  345 => 248,  342 => 247,  336 => 243,  332 => 241,  329 => 240,  271 => 186,  268 => 185,  239 => 159,  227 => 150,  214 => 139,  211 => 138,  203 => 133,  193 => 126,  185 => 121,  175 => 114,  167 => 109,  157 => 102,  134 => 82,  88 => 39,  81 => 35,  73 => 30,  61 => 21,  50 => 13,  41 => 7,  34 => 4,  31 => 3,);
    }
}
