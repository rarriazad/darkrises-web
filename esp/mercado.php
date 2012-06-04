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
    <div style="margin-top:20px;"><strong><span style="font-size: 18px; color: #F60">Mercado</span></strong></div>
        <div style="margin-top:50px;">                
        <span style="font-size:18px; color:#F60;"><strong>Mercado>Tienda</strong></span>
    </div>
<div style="margin-top:10px;">
    	<p><span style="color:#F60"><strong>Tienda:</strong></span> En esta sección podrás encontrar todo lo necesario para armarte basicamente, lo que se vende en la tienda tiene un precio fijo y puede ser comprado por todos.</p>
        <p><span style="color:#F60"><strong>Maletero:</strong></span> La sección tienda cuenta con acceso al maletero en caso de querer vender o almacenar objetos directamente ahí.</p>
        <p><span style="color:#F60"><strong>Objetos:</strong></span> Los objetos que podremos obtener estarán ordenados por categorías:</p>
        	
            <div>
            <div style="width:260px; float:left;">
            <p style="text-align:center;"><img src="../img/categorias.jpg" /></p>
            </div>
            <div style="width:530px; float:left; margin-left:10px;">
            <ul>
            <p><li><span style="color:#F60"><strong>Accesorios</strong></span>.</li></p>
            <p><li><span style="color:#F60"><strong>Armas</strong></span>.</li></p>
            <p><li><span style="color:#F60"><strong>Defensas</strong></span>.</li></p>
            <p><li><span style="color:#F60"><strong>Amuletos</strong></span>.</li></p>
            <p><li><span style="color:#F60"><strong>Varios</strong></span>.</li></p>
    
    		</ul></div><div style="clear:both;"></div>
            
            
    		</div>
    <p><span style="color:#F60"><strong>Mejoras:</strong></span> Esta sección cumple la función de darle una mejoría a tus equipamientos. El equipo puede ser mejorado de distintas formas, estas pueden ser:</p>
    	<div>
  <div style="width:406px; float:left;">
        	<p style="text-align:center;"><img src="../img/mejora.jpg" /></p>
        </div>
          <div style="width:384px; margin-left:10px; float:left;">
      	<ul>
            	
                <p><li><span style="color:#F60"><strong>Mejoras por Nivel:</strong></span> Esta mejora corresponde a subir el nivel del arma, el nivel máximo es +10. Pasado el nivel 40 tienes la opción de mejorar a +11 pero esta mejora será momentanea, el fallo en la mejora de nivel +10 al +11 no trae ninguna consecuencia. Con cada nivel que sube el arma ésta aumenta sus capacidades, en el caso de las armas mejora su daño y en el del equipamiento sus defensas.</li></p>
                
                <p><li><span style="color:#F60"><strong>Mejoras por Bonus:</strong></span> La mejora por bonus consiste en darle una facultad adicional al objeto equipable, como por ejemplo mejorar la taza de críticos, posibilidad de dejar envenenado, etc.</li></p>
                
                <p><li><span style="color:#F60"><strong>Mejoras con Inscripciones:</strong></span> Además de los bonus anteriores, tenemos la opción de añadirle otro plus a nuestro equipo haciendolo mas eficiente. Las inscripciones funcionan similar al bonus.</li></p>
            </ul>
            
        </div>
        <div style="clear:both;"></div>
        </div>
    <p style="text-align:center;"><img src="../img/bonus.jpg" /></p>
    
    

        
                <div style="margin-top:50px;">                
        <span style="font-size:18px; color:#F60;"><strong>Mercado>Jugadores</strong></span>
    </div>
<div style="margin-top:10px;">

    	<p><span style="color:#F60"><strong>Vender:</strong></span> En este apartado tendremos todas las facilidades para vender nuestros objetos que ya no nos sirvan a otros jugadores y ganar un dinero extra. Las ofertas que quieras lanzar al mercado tienen una duración de dos días, después de pasado el plazo el objeto volverá a tu mochila.</p>
        <p style="text-align:center;"><img src="../img/vender.jpg" /></p>
        
        <p><span style="color:#F60"><strong>Lista de Vendedores:</strong></span> En la Lista de Vendedores podremos encontrar diversos objetos vendidos por otros jugadores. En el apartado Ofertas tendremos un buscador que nos permitirá ordenar nuestra busqueda por alfabeto, por nivel, por precio o por el tiempo restante que le queda al objeto.</p>
        <p style="text-align:center;"><img src="../img/vendedores.jpg" /></p>
        

        
    </div>    
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
