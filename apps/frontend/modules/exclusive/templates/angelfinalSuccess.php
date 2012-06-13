<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../Templates/plantilla.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Dark Rises - Guia</title>
<!-- InstanceEndEditable -->
<script type="text/javascript" src="../../js/login.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/estilo.css"/>
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
	background-image:url(../../images/ini.png);
	width:100px;
	height:33px;
	float:left;
}
#ini:hover {
	background-image:url(../../images/inihov.png);
}
#per {
	background-image:url(../../images/per.png);
	width:100px;
	height:33px;
	float:left;
}
#per:hover {
	background-image:url(../../images/perhov.png);
}
#mis {
	background-image:url(../../images/mis.png);
	width:100px;
	height:33px;
	float:left;
}
#mis:hover {
	background-image:url(../../images/mishov.png);
}
#due {
	background-image:url(../../images/due.png);
	width:100px;
	height:33px;
	float:left;
}
#due:hover {
	background-image:url(../../images/duehov.png);
}
#mer {
	background-image:url(../../images/mer.png);
	width:100px;
	height:33px;
	float:left;
}
#mer:hover {
	background-image:url(../../images/merhov.png);
}
#ran {
	background-image:url(../../images/ran.png);
	width:100px;
	height:33px;
	float:left;
}
#ran:hover {
	background-image:url(../../images/ranhov.png);
}
-->
</style>

<!-- InstanceEndEditable -->
</head>

<body>


<div id="fb-root"></div>

<?php $frontend = sfConfig::get('app_frontend_base_url');?>       
       
<script type="text/javascript">
    $(document).ready(function() {

 

        $('#auth-logoutlink').click(function(event){
            
            event.preventDefault();

            logout();


        });
    });
</script>

<div id="login">
    <?php

    if( $sf_user->getAttribute('usuario',false) == false ) { 
        
        echo "<script type='text/javascript'>window.location.href ='".$frontend."/login'</script>";      
        exit;  

    } else {?>
   
    <p style="padding-top:10px; padding-right:150px;"><img src="<?php echo $sf_user->getAttribute('picture') ?>" width="30" height="30" /> <?php  echo $sf_user->getAttribute('usuario')?> <b style="font-size:12px; padding-left:20px;"><a id="auth-logoutlink" href="#logout">Salir</a></b></p>
    <?php } ;?>
</div>


<div id="contenedor">
	<div id="logo">
    	<div id="social">
            	<a href="http://www.lastseal.com" target="_blank"><img src="../../images/ico/lst.png" /></a><a href="http://www.facebook.com" target="_blank"><img src="../../images/ico/fbk.png" /></a><a href="http://www.twitter.com" target="_blank"><img src="../../images/ico/twt.png" /></a><!--<a href="#" target="_blank"><img src="../../images/ico/ing.png" /></a>-->
      		</div>
           <div id="menui">
            <div id="inicio"><a href="<?php echo $frontend ?>" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            <div id="guia"><a href="<?php echo $frontend.'/guide' ?>" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            <div id="comunidad"><a href="<?php echo $frontend.'/destruction' ?>" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            </div>
            
            <div id="menud">
            <div id="media"><a href="<?php echo $frontend.'/media' ?>" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            <div id="servicios"><a href="<?php echo $frontend.'/destruction' ?>" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div>
            <div id="soporte"><a href="<?php echo $frontend.'/destruction' ?>" style="height:100%;"><span style="display:block; height:100%;">&nbsp;</span></a></div></div>
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
                    	<p style="font-size:21px;"><b>Un Ángel para el final</b></p>
                        <p style="margin-left:30px; margin-right:30px; padding-top:20px;">
                        	<p>El sonido tan intenso de la lluvia hizo que despertara sobresaltada. Miró por la ventana a través del vidrio empañado, el paisaje tan triste, todo tan abandonado.</p><p style="margin-top:20px;">
Recordó que su traje para ir al trabajo se encontraba en el tendedero del jardín, odiaba la sola idea de salir a mojarse, pero tarde o temprano debía hacerlo. Tomó el primer par de zapatos que vio debajo de su cama y corrió escaleras abajo. Al abrir la puerta sintió un viento descomunal, un viento que al mirar  por la ventana no notó, se afirmó la chaqueta lo mejor que pudo y emprendió camino al tendedero. Llevaba el traje mojado en sus brazos y antes de llegar a la cocina  miró al cielo, asombrada  vio que  estaba  rojo como si ardiera. Pájaros negros  se desplazaban de un lado a otro. Fue testigo de cómo uno a uno caían al suelo muertos, mientras que otros permanecían en el aire envueltos en llamas.</p><p style="margin-top:20px;"> 
Luego de observar aquel panorama, tiró su traje al suelo y corrió hacia la casa. Aquello que sucedía no era normal, temblorosa  cogió el teléfono para alertar de lo que acontecía, pero las líneas estaban colgadas. Intentó salir de la casa, pero las puertas estaban totalmente trancadas,  los nervios se apoderaron de ella y comenzó a gritar en busca de ayuda, pero no obtuvo respuesta  alguna. Miró nuevamente por la ventana,  el cielo ya no era rojo, un agujero estaba abriéndose lentamente. Eran  las  ocho de la mañana, el sol no brillaba e intrigada miró fijamente aquel cielo tan extraño.</p><p style="margin-top:20px;">
No discernía qué pasaba, hasta que vio una sombra bajar de aquel agujero, intentó nuevamente abrir  la puerta, pero nada, de pronto vio que el cielo comenzaba  a volver a su normalidad, tanto tiempo para que solo una cosa bajara y, peor aún, ¿qué cosa era? 
 Las puertas se abrieron de golpe, en ese instante;  decidió salir corriendo a saber de sus vecinos,  no había nadie en las calles, todo había desaparecido y en medio de la nada se levantaba su casa,  pensó que lo mejor sería volver, pero cada vez que daba un paso para llegar, ésta se alejaba dos, luego de quince minutos quedó exhausta, las lágrimas comenzaban a correr por aquellas mejillas, quizás ese fue el llamado para que aquel ser, que bajó del impresionante cielo, se apareciera.</p><p style="margin-top:20px;">
Tenía una apariencia hermosa y lentamente se le acercó, le susurró al oído que la necesitaba, no pudo negarse y rápidamente el alma de aquella joven desapareció, desapareció tan rápido como aquel ser que, envolviéndola en delirio, habitó su figura. 


</p>


                        </p>
                    </div>
                    <div style="text-align:center;"><a href="<?php echo $frontend.'/exclusive/indice' ?>">Ir al Índice</a></div>
                </div>
				
				
				<!-- InstanceEndEditable --></div>
          </div>
        </div>
        <div id="masterbot"></div>
        
        
        
        
    	</div>
        <!-- InstanceBeginEditable name="bot" -->
        <div style="background-image:url(../../images/bot.png); background-repeat:no-repeat; height:28px;"></div>
        <!-- InstanceEndEditable -->
	</div>
    <div id="pie">
    	<a href="http://www.corfo.cl" target="_blank"><img src="../../images/logos/corfo.png" /></a>
        <a href="http://www.gob.cl" target="_blank"><img src="../../images/logos/chile.png" /></a>
        <a href="http://www.lastseal.com" target="_blank"><img src="../../images/logos/ls.png" /></a>
        <a href="http://www.utfsm.cl" target="_blank"><img src="../../images/logos/usm.png" /></a>
		<a href="http://www.3ie.cl/" target="_blank"><img src="../../images/logos/3ie.png" /></a>
    </div>
</div>

</body>
<!-- InstanceEnd --></html>
