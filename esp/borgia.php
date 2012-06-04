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
                    	<p style="font-size:21px;"><b>Borgia</b></p>
                        <p style="margin-left:30px; margin-right:30px; padding-top:20px;">
                        	<p>Una horrible pesadilla hace que  Borgia despierte exaltado, su esposa lo mira espantada y le pide que se controle. Se limpia el sudor recién asimilando que todo fue una mala jugada de su inconsciente. Ya despierto camina lentamente hacia el lavabo, lo único que quiere es sacar de su mente aquellas horribles imágenes arrojándose agua fría en el rostro para reaccionar.</p><p style="margin-top:20px;"> 
Borgia tiene una bella esposa y dos hijos pequeños, trabaja en un buffet de abogados desde las nueve de la mañana hasta las seis de la tarde. No tiene problemas financieros, ni nada parecido, pero hay algo que lo mantiene diariamente desconectado de su mundo, que lo  transporta a aquellas horribles imágenes. Su desesperación comienza a crecer, hasta llegar el momento que se siente tan trastornado que se ruega a sí mismo detener aquellas figuras en su cabeza. </p><p style="margin-top:20px;">
Siente en su propio cuerpo la desesperación de aquel hombre que corre en sus pesadillas, el dolor de sus caídas,  reconoce el aroma de los pinos y eucaliptos por los que  pasa, también sabe que un ser extraño lo acecha desde las sombras. De hecho, no es la primera vez que este hombre está presente en sus pesadillas y Borgia sabe que éstas no cesarán a menos que haga algo. </p><p style="margin-top:20px;">
Está cansado de despertar a medianoche con la sensación de haber sufrido una larga persecución, cada sueño lo envuelve en una atmósfera de desesperación y angustia que lo acompaña por el resto del día. </p><p style="margin-top:20px;">
Agotado, siente que ya no puede más y decide poner fin a sus pesadillas. En su oficina llama a un psicólogo de renombre, que la hermana de su esposa le recomendó días atrás. Fue como si que esperaban su llamada, puesto que le citaron para el mismo día en horas de la tarde. 
Llegó algo nervioso al lugar, ya que no encuentra una explicación razonable para lo que le sucede cada vez que cierra los ojos. Borgia sabe que al hablar de sus pesadillas quedará como un demente ante el doctor  y le preocupa su reputación, pero aun así, siente una conexión muy fuerte con el tipo de sus sueños, además, siente como si aquel ser le murmurara al oído.</p><p style="margin-top:20px;">
En el pasillo contiguo a la sala de espera, una música relajante acompaña sus movimientos, pero justo antes de entrar en aquel lugar siente un fuerte dolor en el pecho, como si le arrancaran el corazón… al mirarse, puede observar aterrado cómo la sangre corre de un profundo orificio. Una enfermera alcanza a ver algo extraño en el pasillo, sin embargo el equipo de reanimación no logra llegar a tiempo al lugar. </p><p>
Los murmullos de la gente se comienzan a volver en gritos de desesperación al ver como agónico Borgia da su último suspiro, mientras en silencio piensa:</p><p style="margin-top:20px;">
-Solo un último respiro me queda, todo este tiempo estuve alucinando con otra vida, tanto correr de mi destino provocó una fantasía… Sí, imagíname, yo de traje laborando, con una amorosa esposa y dos niños, un hermoso hogar y un automóvil precioso esperándome: me encontraba a salvo, sin necesidad de cargar armas, ni esconderme en la espesura del bosque,  solo una cosa me afligía, me soñaba loco.  Y no lo estoy, solamente pasé por muchos malos ratos. Pero ¿qué persona normal es perseguida por seres indescriptibles?, en mis sueños conocí una parte de la felicidad, en mi anhelo me hacía el desentendido de lo que sucede en realidad. Aunque en mi sueño, yo era como tú, no aceptaba nada de lo que nos acecha.</p>


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
