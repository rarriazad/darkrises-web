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
                
                <div style="width:800px; margin-left:auto; margin-right:auto; ">
                	<span style="color:#F60; font-size:28px;"><strong>Media</strong></span>
                	<div style="padding-top:15px;">
                    	<div><span style="color:#F60; font-size:18px;"><strong>Wallpaper</strong></span></div>
                        <div style="width:448px; padding-top:20px; padding-bottom:20px;float:left;"><a href="../exclusivo/exclusivo.php"><img src="../img/wallp/w1.jpg" /></a></div>
                        <div style="width:224px; float:left; padding-top:20px; padding-bottom:20px; margin-left:60px;"><a href="../exclusivo/exclusivo.php"><img src="../img/wallp/w2.jpg" /></a></div>
                        <div style="width:224px; float:left; padding-top:20px; padding-bottom:20px; margin-left:60px;"><a href="../exclusivo/exclusivo.php"><img src="../img/wallp/w3.jpg" /></a></div>
                        <div class="clear"></div>
                        <div style="text-align:center; margin-bottom:20px;"><a href="../exclusivo/exclusivo.php">Ver Mas...</a></div>
                    	<div style="width:400px; float:left;">
                            <div><span style="color:#F60; font-size:18px;"><strong>Artwork</strong></span></div>
                            <div style="width:392px; margin-left:auto; margin-right:auto; padding-top:20px;"><a href="../exclusivo/exclusivo.php"><img src="../img/art/art1muestra.jpg" /></a></div>
                            <div style="width:392px; margin-left:auto; margin-right:auto; padding-top:20px;"><a href="../exclusivo/exclusivo.php"><img src="../img/art/art2muestra.jpg" /></a></div>
                            <div style="width:392px; margin-left:auto; margin-right:auto; padding-top:20px;"><a href="../exclusivo/exclusivo.php"><img src="../img/art/art3muestra.jpg" /></a></div>
                            <div style="text-align:center; padding-top:20px;"><a href="../exclusivo/exclusivo.php">Ver mas...</a></div>
                        </div>
                    	<div style="width:400px; float:left;">
                        	<div><span style="color:#F60; font-size:18px; padding-left:10px;"><strong> Bestiario</strong></span></div>
                            <div style="text-align:center; padding-top:20px;"><a href="../exclusivo/exclusivo.php"><img src="../img/art/best0muestra.jpg" /></a></div>
                            <div style="text-align:center; padding-top:20px;"><a href="../exclusivo/exclusivo.php"><img src="../img/art/best1muestra.jpg" /></a></div>
                            <div style="text-align:center; padding-top:20px;"><a href="../exclusivo/exclusivo.php">Ver mas...</a></div>
                            <!-- <div><span style="color:#F60; font-size:18px;"><strong>Videos</strong></span></div> -->
                      </div>
                    	<div class="clear"></div>
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
