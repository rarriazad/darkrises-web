<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../Templates/plantilla.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Dark Rises</title>
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

    if( $sf_user->getAttribute('usuario',false) == false ) { ?>
        
        <p style="padding-top:10px; padding-right:150px;"><img src="../../images/ico/fbk.png" width="30" height="30" /> facebook <b style="font-size:12px; padding-left:20px;"><a id="auth-loginlink" href= "<?php echo $frontend.'/login' ?>">Login</a></b></p>

    <?php } else {?>
   
    <p style="padding-top:10px; padding-right:150px;"><img src="<?php echo $sf_user->getAttribute('picture') ?>" width="30" height="30" /> <?php  echo $sf_user->getAttribute('usuario')?> <b style="font-size:12px; padding-left:20px;"><a id="auth-logoutlink" href="#logout">Salir</a></b></p>
    <?php } ;?>
</div>

<div id="contenedor">
	<div id="logo">
            <div id="social">
                <a href="http://www.lastseal.com" target="_blank"><img src="../../images/ico/lst.png" /></a><a href="http://www.facebook.com/pages/Darkrises/449464621736915" target="_blank"><img src="../../images/ico/fbk.png" /></a><a href="http://www.twitter.com" target="_blank"><img src="../../images/ico/twt.png" /></a><!--<a href="#" target="_blank"><img src="images/ico/ing.png" /></a>-->
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
                <div style="width:700px; text-align:center; margin-left:100px;">
        <div id="ini"><a href="<?php echo $frontend.'/guide' ?>" target="_self"><span style="height:33px; display:block;">&nbsp;</span></a></div> 
        <div id="per"><a href="<?php echo $frontend.'/guide/personaje' ?>" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div> 
        <div id="mis"><a href="<?php echo $frontend.'/guide/misiones' ?>" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div>
        <div id="due"><a href="<?php echo $frontend.'/guide/duelos' ?>" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div>
        <div id="mer"><a href="<?php echo $frontend.'/guide/mercado' ?>" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div> 
        <div id="ran"><a href="<?php echo $frontend.'/guide/ranking' ?>" target="_self"><span style="height:33px;display:block;">&nbsp;</span></a></div>
        <div style="clear:both;"></div>
    </div>
    <div style="width:189px; margin-right:auto; margin-left:auto; text-align:center; padding-bottom:10px; padding-top:10px">
    	<div style="width:63px; float:left;"><a href="<?php echo $frontend.'/guide/humanos' ?>"><img src="../../images/h.png" /><br />Humanos</a></div>
        <div style="width:63px; float:left;"><a href="<?php echo $frontend.'/guide/angeles' ?>"><img src="../../images/a.png" /><br />Ángeles</a></div>
        <div style="width:63px; float:left;"><a href="<?php echo $frontend.'/guide/demonios' ?>"><img src="../../images/d.png" /><br />Demonios</a></div>
        <div class="clear"></div>
    </div>
                
				<div style="width:800px; height:700px; margin-left:auto; margin-right:auto; background-image:url(../../images/razas/angeles.png);background-position:0px 130px 0px 0px; background-repeat:no-repeat;">
                	<div style="text-align:center; padding-bottom:130px;">
                    	<p><img src="../../images/a.png" /></p><p><span style="color:#F60; font-size:18px;"><strong>Ángeles</strong></span></p>
        
        <p>Son humanos que traicionaron la raza  humana desarrollando su alma en sentido de los ángeles, al punto que se  convirtieron en híbridos, mitad humanos-mitad ángeles. La mayoría de los  ángeles no ve con buenos ojos a los híbridos, pero son útiles para sus  propósitos, por lo que han decidido compartir algo de su poder con ellos.</p></div>
                    <div style="padding-top:150px;">
                    	<div style="width:400px; float:left;">
                        	<p><span style="color:#F60"><strong>Ángeles tipo Fuerza:</strong></span>:</p>
                            <div style="width:325px; margin-left:auto; margin-right:auto;"><p style="padding-top:20px;">Su poder destructivo es  aterrador, poseen el poder de ataque más devastador de todos, capaces de hacer  desaparecer un pueblo entero de un solo impacto. Además si lo desean son  capaces de petrificar a sus enemigos con sólo tocarlos, se rumorea que nadie ha  podido resistir la petrificación de estos seres. Pero lo más aterrador es que  ellos creen ser inquisidores, el juicio final y la evolución correcta del ser  humano.<br />
         Muchas veces al derrotar a sus  enemigos no dejan de este un cuerpo que pueda ser reconocido.<br />
        Son la fuerza de aniquilación de los  ángeles, incluso para sus aliados es peligroso estar muy cerca de ellos en un  campo de batalla, ya que pueden ser destruidos cuando estos despliegan su poder.</p></div>
                        </div>
                        <div style="width:400px; float:left;">
                        <p><span style="color:#F60"><strong>Ángeles tipo Inteligencia:</strong></span>:</p>
                            <div style="width:325px; margin-left:auto; margin-right:auto;"><p style="padding-top:20px;">Tal vez sean los más  devotos dentro de los ángeles, poseen una Fe ciega en la cual radican su poder.  Esto les ha entregado facultades únicas, sólo su voz ya es un arma temible,  basta con que reciten unas palabras en el idioma santo y todo lo que esté cerca  de él morirá si así lo desea, un humano normal escuchará su voz como sonidos  indescriptibles y mortales, y los vidrios o cristales se romperán en  explosiones.<br />
          Su sangre es como un tóxico al cual nadie  se resiste, son capaces de manipularla casi a su antojo con la cual realizan  sus ataques y les permite dominar el arte de absorber energía vital de sus  objetivos y hacerla suya, por lo cual en el campo de batalla al usar esta  técnica son capaces de regenerar cualquier tipo de daño que hayan sufrido, por esto  son conocidos como los inmortales.</p></div>
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
