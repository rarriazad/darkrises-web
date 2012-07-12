<?php

/* DarkRisesWebBundle:Default:inicio.html.twig */
class __TwigTemplate_abfd881e3b0c3cee0c9f0ec817ed541d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DarkRisesWebBundle:Default:base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'lightboxes' => array($this, 'block_lightboxes'),
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
\t</style>
";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        // line 59
        echo "     <div class=\"video-trailer\"> 
     \t<iframe class=\"video\" width=\"560\" height=\"315\" src=\"http://www.youtube.com/embed/EdXSKfnWWzo\" frameborder=\"0\" allowfullscreen>
     \t</iframe>
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
\t\t\t\t<!-- <a href=\"/guia/queues/\"/> -->
\t\t\t\t\t<div class=\"inicio-pack clear\"/>
\t\t\t\t\t\t<div class=\"inicio-pack-inside\">
\t\t\t\t\t\t\t¡Registrate y obtén el <br/> Pack de Principiante!\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<!-- </a> -->
\t\t\t\t<a id=\"principiante-popup\" class=\"yellow\"> ";
        // line 80
        echo $this->env->getExtension('translator')->getTranslator()->trans("¿Qué es esto?", array(), "messages");
        echo "</a>
\t\t\t\t
\t\t\t</div>
\t\t</div>
     </div>
 ";
    }

    // line 87
    public function block_lightboxes($context, array $blocks = array())
    {
        // line 88
        echo " \t";
        $this->displayParentBlock("lightboxes", $context, $blocks);
        echo "
 \t<div class=\"shadow-inside principiante yellow text-center\" name=\"principiante\"/>
 \t\t<div class=\"shadow-padding\">
\t\t\t<h1 class=\"copperplate\"> ";
        // line 91
        echo $this->env->getExtension('translator')->getTranslator()->trans("Pack de Principiante", array(), "messages");
        echo "</h1>
\t\t\t<p> Dark Rises es un juego que por el momento aún no está funcional en las redes sociales, es por eso que si te registras ahora, y como muestra de agradecimiento a la buena fe de nuestro juego, le regalaremos un pack de principiante que constará de todos los objetos que se listan a continuación. </p>
\t\t\t<p> Para registrarte, lo único que debes hacer es iniciar tu sesión de Facebook en nuestra página. Muchas gracias por el apoyo y esperamos que pronto estén divirtiéndose junto a nosotros. </p>
\t\t</div>
\t</div>
 ";
    }

    // line 98
    public function block_javascript($context, array $blocks = array())
    {
        // line 99
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
        return array (  164 => 99,  161 => 98,  151 => 91,  144 => 88,  141 => 87,  131 => 80,  108 => 59,  105 => 58,  92 => 48,  70 => 29,  62 => 24,  55 => 20,  39 => 7,  32 => 4,  29 => 3,);
    }
}
