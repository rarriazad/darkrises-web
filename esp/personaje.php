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
    <div style="margin-top:20px;"><strong><span style="font-size: 18px; color: #F60">Personaje</span></strong></div>
        <div style="margin-top:50px;">                
        <span style="font-size:18px; color:#F60;"><strong>Personaje>Avatar</strong></span>
    </div>
<div style="margin-top:10px;">
    	<p><span style="color:#F60"><strong>Tienda:</strong></span> Sección donde puedes comprar  objetos como ropa y accesorios para tu avatar.</p>
        <p style="text-align:center;"><img src="../img/tienda.jpg" /></p>
        
     <p><span style="color:#F60"><strong>Armario:</strong></span> Sitio donde quedan almacenados los items comprados en la tienda, obtenidas en mision o en batalla. Desde esta sección también se pueden regalar y vender los objetos.</p>
        
        <p style="text-align:center;"><img src="../img/armario.jpg" /></p>
        
        
</div>
    
    <div style="margin-top:50px;">                
        <span style="font-size:18px; color:#F60;"><strong>Personaje>Perfil</strong></span>
    </div>
    <div style="margin-top:10px;">
    	<p><span style="color:#F60"><strong>Características:</strong></span> Sección donde se administran puntos a ciertas características para moldear a tu personaje como desees, los puntos de vitalidad, fuerza, destreza, fortaleza e inteligencia repercuten directamente en la cantidad de vida, daño, defensa energía daño mágico y defensa mágica del personaje.</p>
        <p style="text-align:center;"><img src="../img/caracteristicas.jpg" /></p>
        
        <p><span style="color:#F60"><strong>Poderes:</strong></span> Muestra el nivel actual y la cantidad de puntos distribuidos a los poderes adquiridos.</p>
        <p style="text-align:center;"><img src="../img/ppoderes.jpg" /></p>
        
        <p><span style="color:#F60"><strong>Maletero:</strong></span> Lugar donde puedes guardar objetos a modo de baúl.</p>
        <p style="text-align:center;"><img src="../img/maletero.jpg" /></p>
        
        <p><span style="color:#F60"><strong>Bunker:</strong></span> Espacio adicional donde poder guardar objetos, congelar experiencia recibida durante las misiones y combates, y otorga la posibilidad de refugiar al personaje haciendolo invulnerable por otros jugadores hasta un máximo de dos días. El tiempo utilizado refugiado en el bunker no se podrá realizar otra opción hasta que el tiempo que el jugador haya dispuesto haya terminado.</p>
        <p style="text-align:center;"><img src="../img/bunker.jpg" /></p>

        <p><span style="color:#F60"><strong>Inventario:</strong></span> Muestra los objetos que actualmente llevas en la mochila. El espacio para contener objetos es mas reducido que el del Bunker. Desde aquí puedes administrar tus objetos, regalarlos a otros jugadores, venderlos o enviarlos al almacen.</p>
        <p style="text-align:center;"><img src="../img/inventario.jpg" /></p>
	</div>
    <div style="margin-top:50px;">                
        <span style="font-size:18px; color:#F60;"><strong>Personaje>Poderes</strong></span></div>
    <div style="margin-top:10px;">
    	<p><span style="color:#F60"><strong>Crecimiento:</strong></span> En los niveles básicos el jugador no puede aprender poderes, para acceder a los poderes el personaje tiene que entrenar su alma hasta alcanzar el nivel 10. Una vez alcanzado tendrá la opción de "arrendar" poderes de las diferentes razas y clases con los llamados Puntos de Alma que serán explicados mas adelante. Al alcanzar el nivel 20 el jugador debe elegir entre su raza favorita y los poderes quedarán permanentes según la raza que haya escogido, el uso de los Puntos de Almas desaparecerá y tendrá la ventaja de llevar a niveles mas altos los poderes de la raza que haya escogido.</p>
        <p style="text-align:center;"><img src="../img/crecimiento.jpg" /></p>
        
        <p><span style="color:#F60"><strong>Puntos de Alma:</strong></span> Cuando el jugador alcanza el nivel diez, despierta en su interior el poder de su alma, diariamente el jugador podrá invertir esos puntos en habilidades de las diferentes razas, los puntos diarios tienen un límite de 10 por día, los poderes que haya adquirido con esos puntos serán reseteados al final del día dandole la posibilidad de distribuir sus 10 puntos a su antojo al próximo día. Ésto hace posible que el jugador pueda tomar una decisión mas acertada al momento de elegir su raza definitiva.</p>
        <p style="text-align:center;"><img src="../img/puntosdealma.jpg" /></p>
        
      	<p><span style="color:#F60"><strong>Descripción:</strong></span> Cada una de las tres Razas tiene dos clases, las cuales se basan en cualidades y forma de juego diferentes, los ángeles por ejemplo pueden optar a desarrollar su Fuerza al máximo o su Inteligencia dandole un enfoque mas mágico a sus poderes. Los Humanos tienen la opción de desarrollar su Fuerza o su Destreza y los Demonios su Fuerza o su Inteligencia.</p>
        
        <p><span style="color:#F60; font-size:18px;"><strong><img src="../img/a.png" />Ángeles</strong></span></p>
      <p>  Son humanos que traicionaron la raza  humana desarrollando su alma en sentido de los ángeles, al punto que se  convirtieron en híbridos, mitad humanos-mitad ángeles. La mayoría de los  ángeles no ve con buenos ojos a los híbridos, pero son útiles para sus  propósitos, por lo que han decidido compartir algo de su poder con ellos.<br />
        Poco a poco son absorbidos por la  Luz, fuente de poder de los ángeles, al punto que ya no se puede distinguir  rasgo de humanidad, convirtiéndose en unos seres implacables, orgullos y  guerreros de un increíble poder, con la capacidad de viajar a los planos que  habitan los ángeles. A medida que su poder aumenta pueden viajar a numerosas  dimensiones o planos.</p>
<p>En niveles avanzados los Ángeles pueden desarrollar sus poderes enfocando su afinidad por el poderoso elemento <strong>Trueno</strong>, mientras que otros optan por la versatilidad y lo etéreo de las <strong>Ráfagas</strong>.</p>
        <span style="color:#F60"><strong>Ángeles tipo Fuerza:</strong></span>
        
        <div style="margin-top:10px; margin-bottom:10px;">
        <div style="width:151px; float:left; margin-right:10px;"><img src="../img/angfuerza.jpg" /></div>
      <div style="width:639px; float:left;"><p>Su poder destructivo es  aterrador, poseen el poder de ataque más devastador de todos, capaces de hacer  desaparecer un pueblo entero de un solo impacto. Además si lo desean son  capaces de petrificar a sus enemigos con sólo tocarlos, se rumorea que nadie ha  podido resistir la petrificación de estos seres. Pero lo más aterrador es que  ellos creen ser inquisidores, el juicio final y la evolución correcta del ser  humano.<br />
         Muchas veces al derrotar a sus  enemigos no dejan de este un cuerpo que pueda ser reconocido.<br />
        Son la fuerza de aniquilación de los  ángeles, incluso para sus aliados es peligroso estar muy cerca de ellos en un  campo de batalla, ya que pueden ser destruidos cuando estos despliegan su poder.</p>
      </div>
      <div style="clear:both;"></div>
      </div>
      
        <span style="color:#F60"><strong>Ángeles tipo Inteligencia:</strong></span>
         <div style="margin-top:10px; margin-bottom:10px;">
        <div style="width:151px; float:left; margin-right:10px;"><img src="../img/anginteligencia.jpg" /></div>
      <div style="width:639px; float:left;">
        <p>Tal vez sean los más  devotos dentro de los ángeles, poseen una Fe ciega en la cual radican su poder.  Esto les ha entregado facultades únicas, sólo su voz ya es un arma temible,  basta con que reciten unas palabras en el idioma santo y todo lo que esté cerca  de él morirá si así lo desea, un humano normal escuchará su voz como sonidos  indescriptibles y mortales, y los vidrios o cristales se romperán en  explosiones.<br />
          Su sangre es como un tóxico al cual nadie  se resiste, son capaces de manipularla casi a su antojo con la cual realizan  sus ataques y les permite dominar el arte de absorber energía vital de sus  objetivos y hacerla suya, por lo cual en el campo de batalla al usar esta  técnica son capaces de regenerar cualquier tipo de daño que hayan sufrido, por esto  son conocidos como los inmortales.</p>
</div>
      <div style="clear:both;"></div>
      </div>
        
        <p><span style="color:#F60; font-size:18px;"><strong><img src="../img/h.png" />Humanos</strong></span></p>
        
        <p>En niveles avanzados los Humanos pueden desarrollar sus poderes enfocando su afinidad por el resistente elemento <strong>Tierra</strong>, mientras que otros optan por la vitalidad y lo vivo de la <strong>Madera</strong>.</p>
        
        <span style="color:#F60"><strong>Humanos tipo Fuerza:</strong></span>
        
        <div style="margin-top:10px; margin-bottom:10px;">
        <div style="width:151px; float:left; margin-right:10px;"><img src="../img/humfuerza.jpg" /></div>
      <div style="width:639px; float:left;">
        <p>Poseen una gran fuerza  de voluntad y física, son los únicos capaces de usar correctamente una espada  gigante incluso con una sola mano, además de cargar sin ningún esfuerzo armas  de gran calibre.<br />
          Son una fuerza de choque perfecta en el  campo de batalla. Rápidos, certeros, decididos y con un gran poder de  destrucción. <br />
          Mediante el duro entrenamiento al cual se  someten logran el control de su energía espiritual, del cual su rasgo principal  es la de expulsar o emitir su energía con tal potencia que hace que sus ataques  sean devastadores.<br />
          Son capaces de cargar con su energía  las armas que usan amplificando su poder. Su concentración les permite tener un  dominio de su cuerpo al punto que son capaces de regenerar sus heridas en sólo  unos instantes, además de resistir todo tipo de venenos y ataques ácidos.</p>
</div>
      <div style="clear:both;"></div>
      </div>
                
        <p><span style="color:#F60"><strong>Humanos tipo Destreza:</strong></span></p>
        
        <div style="margin-top:10px; margin-bottom:10px;">
        <div style="width:151px; float:left; margin-right:10px;"><img src="../img/humdestreza.jpg" /></div>
      <div style="width:639px; float:left;">
        <p>Su principal cualidad son su gran velocidad y agilidad, su  agudeza les permite encontrar siempre los puntos débiles de sus adversarios  haciendo que sus certeros ataques sean aún más precisos. Debido a la increíble  velocidad de sus movimientos pueden acabar en segundos con un grupo de  enemigos, quienes muchas veces ni siquiera pueden darse cuenta de lo sucedido.<br />
          Concentran toda  su energía espiritual dentro de su cuerpo, así aumentan la potencia de sus  músculos, fortalecen su cuerpo, y adquieren una mente más rápida.<br />
          Poseen ataques con  una celeridad tal que pareciera que pudieran proyectar varias replicas de si  mismo que atacan simultáneamente.</p>
        <p>     Sin ninguna duda son los indicados para  infiltrarse y pasar desapercibidos en territorio enemigo. Son los asesinos  perfectos.</p>
      </div>
      <div style="clear:both;"></div>
      </div>
        
        
        
        
        
        

        
      <p><span style="color:#F60; font-size:18px;"><strong><img src="../img/d.png" />Demonios</strong></span></p>
      
      <p>Son  humanos que pusieron sus almas al servicio de XXX, transformándose por  completos en seres del “abismo” .</p>
      <p>En niveles avanzados los Demonios pueden desarrollar sus poderes enfocando su afinidad por el destructivo elemento<strong> Fuego</strong>, mientras que otros optan por lo mortal y lo frío del <strong>Hielo</strong>.</p>
      
        <span style="color:#F60"><strong>Demonios tipo Fuerza:</strong></span>
    		<div style="margin-top:10px; margin-bottom:10px;">
        <div style="width:151px; float:left; margin-right:10px;"><img src="../img/demfuerza.jpg" /></div>
      <div style="width:639px; float:left;">
        <p>  Son los guerreros de  la oscuridad encargados de sembrar la guerra, ira y confusión en el mundo de  los humanos y de esta manera abrir paso a sus demás hermanos, demonios y  ángeles caídos.<br />
          Han desarrollado increíbles técnicas de  ataques y defensas, mediante la manipulación y transformación de su cuerpo. Su  piel puede volverse tan dura que soportan casi cualquier ataque, pueden verse  envueltos en una serie de explosiones que destruyen todo a su alrededor y salir  ilesos. <br />
          Canalizan su energía a través de la ira  para aumentar la fuerza de sus ataques. Son capaces de deformar sus huesos y  hacer de estos armas poderosas, las cuales incrementan su daño al impregnarles  ácido segregado de sus propios cuerpos.<br />
          El dominio metamórfico que poseen les  permite deformar sus cuerpos a voluntad, por lo que pasan desapercibidos al  tomar su apariencia humana.</p>
</div>
      <div style="clear:both;"></div>
      </div>
    
        <span style="color:#F60"><strong>Demonios tipo Inteligencia:</strong></span>
        <div style="margin-top:10px; margin-bottom:10px;">
        <div style="width:151px; float:left; margin-right:10px;"><img src="../img/deminteligencia.jpg" /></div>
      <div style="width:639px; float:left;">
        <p>   Son los señores de las sombras y  penumbras, que siembran la desesperación y el miedo en la tierra, su gran poder  mental les permite el control de la oscuridad que los rodea.<br />
          Capaces de dominar las sombras,  utilizan estas para atacar a sus objetivos, dándoles forma de espectros o  fantasmas que dañan y además drenan vida a sus víctimas, la cual es absorbida  por el demonio.<br />
          Una de sus grandes habilidades es  la de manipular el espacio, capaces de crear un vacío en un área, la cual es  llenada con un gas venenoso que incluso penetra la piel.<br />
          A pesar de sus ataques calculados  y seguros, si bien son alcanzados en combate cuerpo a cuerpo, estos no están  indefensos, crean unas llamas que envuelven su cuerpo protegiéndolos de  cualquier daño y queman cualquier veneno que pudiera entrar en su cuerpo.</p>
</div>
      <div style="clear:both;"></div>
      </div>
        
  </div>
    
</div>

		<p>&nbsp;</p>		
				
				<!-- InstanceEndEditable --></div>
          </div>
        </div>
        <div id="masterbot"></div>
        
        
        
        
    	</div>
        <!-- InstanceBeginEditable name="bot" --><div style="background-image:url(../img/bot.png); background-repeat:no-repeat; height:28px;"></div>
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
