<?php session_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../Templates/plantilla.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Dark Rises - Guia</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../estilo.css"/>
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
a {
	text-decoration:none;
}
a:visited {
	text-decoration:none;
}

#ini {
	background-image:url(../img/ini.png);
	width:100px;
	height:33px;
	float:left;
}
#ini:hover {
	background-image:url(../img/inihov.png);
}
#per {
	background-image:url(../img/per.png);
	width:100px;
	height:33px;
	float:left;
}
#per:hover {
	background-image:url(../img/perhov.png);
}
#mis {
	background-image:url(../img/mis.png);
	width:100px;
	height:33px;
	float:left;
}
#mis:hover {
	background-image:url(../img/mishov.png);
}
#due {
	background-image:url(../img/due.png);
	width:100px;
	height:33px;
	float:left;
}
#due:hover {
	background-image:url(../img/duehov.png);
}
#mer {
	background-image:url(../img/mer.png);
	width:100px;
	height:33px;
	float:left;
}
#mer:hover {
	background-image:url(../img/merhov.png);
}
#ran {
	background-image:url(../img/ran.png);
	width:100px;
	height:33px;
	float:left;
}
#ran:hover {
	background-image:url(../img/ranhov.png);
}
-->
</style>

<!-- InstanceEndEditable -->
</head>

<body>

  <?php

   require_once("../sesion.class.php");

   $sesion = new sesion();

   $usuario = $sesion->get("usuario");
   $picture = $sesion->get("picture");
   $sesion->delete("login");
	
	?>

       
       

<script type="text/javascript">
    $(document).ready(function() {
        $('#coin-slider').coinslider({ width: 632, height: 169, navigation: true, delay: 5000 });
    });
</script>

<div id="login">
	<?php
	if( $usuario == false ) { ?>
		
		<p style="padding-top:10px; padding-right:150px;"><img src="img/ico/fbk.png" width="30" height="30" /> facebook <b style="font-size:12px; padding-left:20px;"><a href="login.php">Login</a></b></p>

   	<?php } else {?>
   
	<p style="padding-top:10px; padding-right:150px;"><img src="<?php echo $picture ?>" width="30" height="30" /> <?php  echo $usuario;?> <b style="font-size:12px; padding-left:20px;"><a href="cerrarsesion.php">Salir</a></b></p>
    <?php } ;?>
</div>

<div id="contenedor">
	<div id="logo">
    	<div id="social">
            	<a href="http://www.lastseal.com" target="_blank"><img src="../img/ico/lst.png" /></a><a href="http://www.facebook.com" target="_blank"><img src="../img/ico/fbk.png" /></a><a href="http://www.twitter.com" target="_blank"><img src="../img/ico/twt.png" /></a><!--<a href="#" target="_blank"><img src="../img/ico/ing.png" /></a>-->
      		</div>
            <div id="menui">
            <div id="inicio"><a href="../index.php" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            <div id="guia"><a href="guia.php" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            <div id="comunidad"><a href="../destruccion/index.html" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            </div>
            
            <div id="menud">
            <div id="media"><a href="media.php" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            <div id="servicios"><a href="../destruccion/index.html" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            <div id="soporte"><a href="../destruccion/index.html" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div></div>
            <div class="clear"></div>
    </div>
    <div id="mn"></div>
    <div id="contenido">
    	<div id="master">
    
    	<div id="mastertop"></div>
        <div id="mastermid">
        	<div id="cmaster">
            	<div id="ccont">
				<!-- InstanceBeginEditable name="contenidoeditable" -->
                
                <div style="width:850px; margin-right:auto; margin-left:auto;">
                	<div style="width:800px; margin:0px auto 0px auto; padding:20px 0px 20px 0px; text-align:justify;">
                    	<p style="font-size:21px;"><b>Coincidencias</b></p>
                        <p style="margin-left:30px; margin-right:30px; padding-top:20px;">
                        	<p>Hace casi un mes me nombraron jefe en la División de Investigación UVS (Unidad de Víctimas Especiales). 
Al momento de recibir aquella noticia me sentí dichoso y sabía que aquellos años de trabajo no habían sido en vano, pero con el tiempo comencé a darme cuenta que esto no era mucho mejor que mi anterior puesto. Todo comenzó dos semanas después del ascenso. Me informaron de un cadáver cerca de la carretera de Louisville, por lo demás, no conocía muy bien a mi equipo y me sentía algo incómodo, pero ya había quedado a cargo del caso.</p><p style="margin-top:20px;">
Esa noche llegamos rápido al lugar, la policía resguardaba la evidencia y mi equipo se disponía a su labor. El lugar era bastante tétrico, y muy  cerca de la escena comenzaba el bosque estatal Harrison-Crawford. Al momento de ver los restos quedamos un tanto impactados por la brutalidad como estaba mutilado, el perito mencionó que aquellos vestigios podrían haber sido de las piernas del individuo.</p><p style="margin-top:20px;">
Algo intrigado me dediqué a observar el área con más atención, ví que las huellas de aquel depredador iban en dirección al bosque, le pedí al guardabosque de turno que abriera el portillo para entrar al lugar. Miraba las espesas copas de árboles, pudiendo concluir que lo más probable fuera un animal salvaje y aquella víctima un cazador. Fue entonces cuando sentí que algo líquido cayó en mi frente, rápidamente pasé mi mano para limpiarme, pero cuál fue mi sorpresa, aquello era una gota de sangre. </p><p style="margin-top:20px;">
Corrí a la salida y avisé a algunos de mi equipo para que llevaran linternas. Inmediatamente nos internamos, cuando ya habíamos llegado al lugar, vimos el torso de aquella persona, tenía un agujero en el pecho más grande que dos puños juntos. ¿Qué clase de bestia o persona haría esto?; rápidamente bajamos el cuerpo que desprendía un olor horrible, lo cargamos hacia la salida, y lo enviamos al laboratorio. Dejamos el área resguardada porque ya estaba muy oscuro para continuar.</p><p style="margin-top:20px;">
Tomando en cuenta los detalles me cuesta imaginar la manera en que perdió la vida, me llamaron avisando que su corazón no estaba y se declaró un hecho que los restos encontrados en el camino pertenecían a sus extremidades. </p><p style="margin-top:20px;">
Un compañero de la unidad me informó hace una media hora, que esto ya había sucedido en otros dos lados y las descripciones eran muy similares al cuerpo de nuestra víctima. Se les encontraba con aquel agujero en el pecho y su corazón ya no estaba, por lo demás, las heridas tenían algo bastante especial, los expedientes las describían cauterizadas, mi colega me solicitó comunicarme rápidamente con los jefes de aquellos casos para recopilar más datos.</p><p style="margin-top:20px;">
Los dos me comentaron que dentro del perímetro estaban las pertenencias de aquellos caídos y se dio la coincidencia que estos llevaban un chaleco antibalas. También llevaban algunas armas, pero comentaron que no parecían armas normales. Por el solo hecho de que llevaran chaleco antibalas deseché la conclusión de que fueran cazadores, quizás era algún tipo de guerrillero, no lo sé, nada concuerda con el perfil, ni siquiera las armas descritas. Solo me quedó esperar el amanecer para volver a la escena, por lo demás analizaba la remota idea que esta persona llevara aquellos objetos consigo. Los busqué incansablemente y no encontré nada, incluso  pasaron un par de horas cuando llegó un policía avisándome que habían encontrado extrañas pertenencias en las orillas de un río cercano. Les pedí un aventón para ir a averiguar si eran de mi víctima y rápidamente me movilicé hasta el lugar, donde ya había un par de policías esperándome.</p><p style="margin-top:20px;">
Aquellas cosas estaban dispersas en varios puntos, así que me incliné a observar la primera, llevaba unas inscripciones en el mango, quizás me diera alguna pista del dueño, un policía me llamó, había encontrado un bolsito con algo como un diario, me lo entregó algo pálido; no perdí tiempo y comencé a hojearlo, tenía las primeras páginas en blanco y en la última hoja decía:</p><p style="margin-top:20px;">
“Si encontraste esto, es porque he fallado en mi misión, debo decirte que no estamos solos.”</p><p style="margin-top:20px;">
Sentí que era una broma de mal gusto, las investigaciones continúan, no podría decir exactamente lo que supongo, mi trabajo no permite un quizás ni mucho menos una conclusión como la que imagino, debo decir, también, que los casos siguen en aumento y casi siempre tienen el mismo patrón. 
Me he encargado de comunicarme con más unidades de víctimas de este tipo, cada una sabe lo que cree, pero dio la coincidencia de que todos están muy preocupados con esto.</p><p style="margin-top:20px;">
  Algo más acecha nuestras sombras, solo deseo que seamos capaces de parar lo que hay y seguir encontrando respuestas, no me detendré hasta saber qué sucedió con estas personas. Solo me falta alguna luz o una pista para continuar.</p>
                                                                                       <p style="text-align:right; margin-top:20px; margin-right:150px;">R.S.Moore</p> 


                        </p>
                    </div>
                    <div style="text-align:center;"><a href="indice.php">Ir al Índice</a></div>
                </div>
				
				
				<!-- InstanceEndEditable --></div>
          </div>
        </div>
        <div id="masterbot"></div>
        
        
        
        
    	</div>
        <!-- InstanceBeginEditable name="bot" -->
        <div style="background-image:url(../img/bot.png); background-repeat:no-repeat; height:28px;"></div>
        <!-- InstanceEndEditable -->
	</div>
    <div id="pie">
    	<a href="http://www.corfo.cl" target="_blank"><img src="../img/logos/corfo.png" /></a>
        <a href="http://www.gob.cl" target="_blank"><img src="../img/logos/chile.png" /></a>
        <a href="http://www.lastseal.com" target="_blank"><img src="../img/logos/ls.png" /></a>
        <a href="http://www.utfsm.cl" target="_blank"><img src="../img/logos/usm.png" /></a>
		<a href="http://www.3ie.cl/" target="_blank"><img src="../img/logos/3ie.png" /></a>
    </div>
</div>

</body>
<!-- InstanceEnd --></html>
