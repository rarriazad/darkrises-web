<?php session_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../Templates/plantilla.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Dark Rises</title>
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
                
				<div style="width:800px; height:700px; margin-left:auto; margin-right:auto; background-image:url(../img/razas/humanos.png);background-position:0px 50px 0px 0px;">
                	<div style="text-align:center; padding-bottom:30px;">
                    	<p><img src="../img/h.png" /></p><p><span style="color:#F60; font-size:18px;"><strong>Humanos</strong></span></p>
        
        <p>En niveles avanzados los Humanos pueden desarrollar sus poderes enfocando su afinidad por el resistente elemento <strong>Tierra</strong>, mientras que otros optan por la vitalidad y la Robustéz de la <strong>Madera</strong>.</p>
                    </div>
                    <div style="padding-top:150px;">
                    	<div style="width:400px; float:left;">
                        	<p><span style="color:#F60"><strong>Humanos tipo Fuerza:</strong></span>:</p>
                            <div style="width:325px; margin-left:auto; margin-right:auto;"><p style="padding-top:20px;">Poseen una gran fuerza de voluntad y física, son los únicos capaces de usar correctamente una espada gigante incluso con una sola mano, además de cargar sin ningún esfuerzo armas de gran calibre.
Son una fuerza de choque perfecta en el campo de batalla. Rápidos, certeros, decididos y con un gran poder de destrucción. 
Mediante el duro entrenamiento al cual se someten logran el control de su energía espiritual, del cual su rasgo principal es la de expulsar o emitir su energía con tal potencia que hace que sus ataques sean devastadores.
Son capaces de cargar con su energía las armas que usan amplificando su poder. Su concentración les permite tener un dominio de su cuerpo al punto que son capaces de regenerar sus heridas en sólo unos instantes, además de resistir todo tipo de venenos y ataques ácidos.</p></div>
                        </div>
                        <div style="width:400px; float:left;">
                        <p><span style="color:#F60"><strong>Humanos tipo Destreza:</strong></span>:</p>
                            <div style="width:325px; margin-left:auto; margin-right:auto;"><p style="padding-top:20px;">Su principal cualidad son su gran velocidad y agilidad, su  agudeza les permite encontrar siempre los puntos débiles de sus adversarios  haciendo que sus certeros ataques sean aún más precisos. Debido a la increíble  velocidad de sus movimientos pueden acabar en segundos con un grupo de  enemigos, quienes muchas veces ni siquiera pueden darse cuenta de lo sucedido.<br />
          Concentran toda  su energía espiritual dentro de su cuerpo, así aumentan la potencia de sus  músculos, fortalecen su cuerpo, y adquieren una mente más rápida.<br />
          Poseen ataques con  una celeridad tal que pareciera que pudieran proyectar varias replicas de si  mismo que atacan simultáneamente.</p>
        <p>     Sin ninguna duda son los indicados para  infiltrarse y pasar desapercibidos en territorio enemigo. Son los asesinos  perfectos.</p></div>
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
