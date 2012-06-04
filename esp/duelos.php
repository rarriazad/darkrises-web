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
                
                <div style="font-family:Verdana, Geneva, sans-serif; font-size:12px; width:800px; margin-left:auto; margin-right:auto;">
	<div style="width:700px; text-align:center; margin-left:100px;">
    	<div id="ini"><a href="guia.php" target="_self"><span style="height:33px; display:block;">&nbsp;</span></a></div> 
        <div id="per"><a href="personaje.php" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div> 
        <div id="mis"><a href="misiones.php" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div>
        <div id="due"><a href="duelos.php" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div>
        <div id="mer"><a href="mercado.php" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div> 
        <div id="ran"><a href="ranking.php" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div>
        <div style="clear:both;"></div>
    </div>
        <div style="width:189px; margin-right:auto; margin-left:auto; text-align:center; padding-bottom:10px; padding-top:10px">
    	<div style="width:63px; float:left;"><a href="rhumanos.php"><img src="../img/h.png" /><br />Humanos</a></div>
        <div style="width:63px; float:left;"><a href="rangeles.php"><img src="../img/a.png" /><br />Ángeles</a></div>
        <div style="width:63px; float:left;"><a href="rdemonios.php"><img src="../img/d.png" /><br />Demonios</a></div>
        <div class="clear"></div>
    </div>
    <div style="margin-top:20px;"><strong><span style="font-size: 18px; color: #F60">Duelos</span></strong></div>
        <div style="margin-top:50px;">                
    </div>
<div style="margin-top:10px;">
    	<p><span style="color:#F60"><strong>Barra de busqueda:</strong></span> La sección de duelos consta de una barra de busqueda, en el caso que quieras retar a un personaje específico.</p>
    <p style="text-align:center;"><img src="../img/busqueda.jpg" /></p>
        
        <p><span style="color:#F60"><strong>Lista de Oponentes:</strong></span> La lista de oponentes muestra personajes de otros jugadores que se encuentran en un nivel similar al de nuestro personaje. Muestra el ícono de la raza del jugador, el nombre del mismo y su nivel.</p>
<p style="text-align:center;"><img src="../img/oponentes.jpg" /></p>
		
        <p><span style="color:#F60"><strong>Restricciónes, Penalizaciones y Prestigio:</strong></span> Los resultados de los duelos afectan directamente en el prestigio del jugador. Existen tres condiciones que restringen los duelos basados en los niveles de los jugadores:</p>
        
        <ul><li>
          <p><span style="color:#F60"><strong>Nivel 1 al 9:</strong></span> Este grupo de jugadores no puede entrar en duelos, y se encuentran protegidos de otros jugadores.</p></li>
          <li>
          <p><span style="color:#F60"><strong>Nivel 10 al 19:</strong></span> Este grupo de jugadores puede entrar a los duelos, pero solo mediante ellos mismos ya que sus poderesno han despertado del todo.</p></li>
          <li>
          <p><span style="color:#F60"><strong>Nivel 20 o mayor:</strong></span> Este grupo de jugadores puede retar a cualquier jugador a duelo con excepción de los anteriores dos grupos.</p></li>
        </ul>
         <p><span style="color:#F60"><strong>De las Penalizaciónes y el Prestigio:</strong></span> Como es lógico el tercer grupo de jugadores al poder retar a cualquier jugador de su grupo, existen ciertas desventajas al momento de un jugador de mayor nivel retar a uno de mucho menos nivel. Tomando eso en consideración existe un sistema de prestigio para los jugadores.</p>
         <p>Los jugadores pueden retar a cualquier otro jugador sobre su nivel sin miedo a recibir una penalización, sin embargo si se reta a un jugador de diez niveles por debajo, éste recibirá una penalización proporcional a la diferencia de nivel que repercutirá directamente en el prestigio del jugador atacante.</p>
</div>
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
