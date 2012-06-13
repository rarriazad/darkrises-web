<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../Templates/plantilla.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Dark Rises - Guia</title>
<!-- InstanceEndEditable -->
<script type="text/javascript" src="../js/login.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
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
    background-image:url(../images/ini.png);
    width:100px;
    height:33px;
    float:left;
}
#ini:hover {
    background-image:url(../images/inihov.png);
}
#per {
    background-image:url(../images/per.png);
    width:100px;
    height:33px;
    float:left;
}
#per:hover {
    background-image:url(../images/perhov.png);
}
#mis {
    background-image:url(../images/mis.png);
    width:100px;
    height:33px;
    float:left;
}
#mis:hover {
    background-image:url(../images/mishov.png);
}
#due {
    background-image:url(../images/due.png);
    width:100px;
    height:33px;
    float:left;
}
#due:hover {
    background-image:url(../images/duehov.png);
}
#mer {
    background-image:url(../images/mer.png);
    width:100px;
    height:33px;
    float:left;
}
#mer:hover {
    background-image:url(../images/merhov.png);
}
#ran {
    background-image:url(../images/ran.png);
    width:100px;
    height:33px;
    float:left;
}
#ran:hover {
    background-image:url(../images/ranhov.png);
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
        
        <p style="padding-top:10px; padding-right:150px;"><img src="../images/ico/fbk.png" width="30" height="30" /> facebook <b style="font-size:12px; padding-left:20px;"><a id="auth-loginlink" href= "<?php echo $frontend.'/login' ?>">Login</a></b></p>

    <?php } else {?>
   
    <p style="padding-top:10px; padding-right:150px;"><img src="<?php echo $sf_user->getAttribute('picture') ?>" width="30" height="30" /> <?php  echo $sf_user->getAttribute('usuario')?> <b style="font-size:12px; padding-left:20px;"><a id="auth-logoutlink" href="#logout">Salir</a></b></p>
    <?php } ;?>
</div>

<div id="contenedor">
    <div id="logo">
            <div id="social">
                <a href="http://www.lastseal.com" target="_blank"><img src="../images/ico/lst.png" /></a><a href="http://www.facebook.com/pages/Darkrises/449464621736915" target="_blank"><img src="../images/ico/fbk.png" /></a><a href="http://www.twitter.com" target="_blank"><img src="../images/ico/twt.png" /></a><!--<a href="#" target="_blank"><img src="images/ico/ing.png" /></a>-->
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
                
                <div style="font-family:Verdana, Geneva, sans-serif; font-size:12px; width:800px; margin-left:auto; margin-right:auto;">
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
        <div style="width:63px; float:left;"><a href="<?php echo $frontend.'/guide/humanos' ?>"><img src="../images/h.png" /><br />Humanos</a></div>
        <div style="width:63px; float:left;"><a href="<?php echo $frontend.'/guide/angeles' ?>"><img src="../images/a.png" /><br />Ángeles</a></div>
        <div style="width:63px; float:left;"><a href="<?php echo $frontend.'/guide/demonios' ?>"><img src="../images/d.png" /><br />Demonios</a></div>
        <div class="clear"></div>
    </div>
    <div style="margin-top:20px;">
        <span style="font-size:18px; color:#F60; "><strong>Interfáz General</strong></span>
        
        <p style="text-align:center;"><img src="../images/interfaz.jpg" /></p>
        
        <p><span style="color:#F60"><strong>0- Raza:</strong></span> Muestra el icono de la raza a la que se pertenece, estas pueden ser:</p>
         
       <table width="200" border="0" style="margin-left:150px;">
  <tr>
    <td><span style="text-align:center;"><img src="../images/h.png" /></span></td>
    <td><span style="text-align:center;"><img src="../images/d.png" /></span></td>
    <td><span style="text-align:center;"><img src="../images/a.png" /></span></td>
  </tr>
  <tr>
    <td><span style="text-align:center;">Humanos</span></td>
    <td><span style="text-align:center;">Demonios</span></td>
    <td><span style="text-align:center;">Ángeles</span></td>
  </tr>

</table>
<p><span style="color:#F60"><strong>1- Nombre:</strong></span> Muestra el nombre que se eligió para el personaje en el comienzo.</p>
        <p><span style="color:#F60"><strong>2- Nivel:</strong></span> Nivel actual del personaje.</p>
        <p><span style="color:#F60"><strong>3- Energía:</strong></span> Cantidad de energía que le queda al personaje para realizar acciones.</p>
        <p><span style="color:#F60"><strong>4- Salud:</strong></span> Muestra la salud actual del personaje.</p>
        <p><span style="color:#F60"><strong>5- Exp.:</strong></span> Muestra los puntos de experiencia actual y el total para subir al siguiente nivel.</p>
        <p><span style="color:#F60"><strong>6- Dinero:</strong></span> <img src="../images/m.png" /> Cantidad de dinero virtual.</p>
        <p><span style="color:#F60"><strong>7- Drak:</strong></span> <img src="../images/drak.png" />Cantidad de dinero real que posee el personaje.</p>
        <p><span style="color:#F60"><strong>8- Itemshop:</strong></span> Tienda en la cual se pueden comprar objetos con Drak</p>
        <p><span style="color:#F60"><strong>9- Ayuda:</strong></span> <img src="../images/help.png" />Muestra el tutorial de la sección en la que se encuentra el personaje.</p>
        
      <div style="margin-top:50px;">
        <span style="font-size:18px; color:#F60;"><strong>Inicio>Muro</strong></span>
        
    <div style="width:800px; margin-top:10px;">
    <div style="width:494px; float:left;">
        <img src="../images/muro.jpg" />
    </div>
    <div style="width:300px;float:left; margin-left:6px;">
        <p><span style="color:#F00"><strong>Avatar:</strong></span> Representación virtual del jugador.</p>
        <p><span style="color:#FF4E00"><strong>Votación:</strong></span> Puntuación del Avatar del usuario, calificada por otros usuarios.</p>
        <p><span style="color:#0000FF"><strong>Información Personal:</strong></span> Espacio dedicado a mostrar mas información sobre el avatar del usuario, como la Edad, el Nivel, la Estatura, su frase favorita, su descripción e intereses.</p>
        <p><span style="color:#FFF000"><strong>Título:</strong></span> Categoría del usuario según sus logros.</p>
        <p><span style="color:#00FFEA"><strong>Equipamiento:</strong></span> Muestra el equipamiento del personaje, el usuario tiene la opción de dejarlo oculto si así lo desea mediante el botón en la parte inferior de la ventana.</p>
        </div>
        <div style="clear:both;"></div>      
    </div>
    
    <div style="margin-top:50px;">                
        <span style="font-size:18px; color:#F60;"><strong>Inicio>Noticias</strong></span>
    </div>
    <div style="margin-top:10px;">
        <p><span style="color:#F60"><strong>Mensajes:</strong></span> Muestra avisos sobre las interacciones que otros jugadores han hecho con tu personaje.</p>
        <p style="text-align:center;"><img src="../images/mensajes.jpg" /></p>
        <p><span style="color:#F60"><strong>Actualizaciones:</strong></span> Muestra acciones que otros jugadores han hecho con tu personaje cronológicamente.</p>
        <p style="text-align:center;"><img src="../images/actualizaciones.jpg" /></p>
        
    </div>       
<div style="margin-top:50px;">                
        <span style="font-size:18px; color:#F60;"><strong>Inicio>Historias</strong></span>
    </div>
    <div style="margin-top:10px;">
        <p><span style="color:#F60"><strong>Historias:</strong></span> Sección dedicada a dar a conocer la crónica actual en la que se desarrolla el juego y las anteriores.</p>
        <p style="text-align:center;"><img src="../images/historias.jpg" /></p>
    </div>                   
            
</div>
  </div>
</div>
<div style="font-family:Verdana, Geneva, sans-serif; font-size:12px; margin-top:50px; width:800px; margin-left:auto; margin-right:auto;">
    <ul>
      <span style="font-size:18px; font-family:'Georgia', Times New Roman, Times, serif; color:#F60;"><strong>Glosario:</strong></span>
        <p>
        <li><span style="color:#F60"><strong>Salud:</strong></span> Puntos que determinan la capacidad de recibir golpes de enemigos, si ésta llega a cero el personaje o criatura es derrotado.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Energía:</strong></span> Es la capacidad de realizar acciónes cotidianas de una persona durante el día.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Regeneración:</strong></span> Lapso de dos minutos para recuperar un punto de Salud y de Energía.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Nivel:</strong></span> Indicador de desarrollo del personaje en algunas areas, sirve para desbloquear areas restringidas y otorga otros beneficios.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Experiencia/Exp.:</strong></span> Puntos necesarios para subir de Nivel.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Congelar Ecperiencia/Exp.:</strong></span> Impedir el aumento de experiencia, como consecuencia permanece en el nivel actual hasta que se presione el botón nuevamente.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Dinero Virtual:</strong></span> Moneda virtual con la cual comprar items en la tienda.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Drak:</strong></span> Moneda virtual con la cual comprar en el item shop, ésta solo se consigue comprandola con dinero real.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Item Shop:</strong></span> Tienda virtual en la cual puedes comprar objetos que no son vendidos comunmente en la tienda.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Crítico:</strong></span> Causa el doble de daño a modo de golpe certero.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Penetración:</strong></span> Golpe que ignora cualquier tipo de defensas.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Evasión:</strong></span> Acción de eludir un ataque enemigo.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Ácido:</strong></span> Daño extra al ataque realizado, este perdura en los turnos siguientes.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Veneno:</strong></span> Daño extra al ataque realizado, este perdura en los turnos siguientes.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Intoxicación:</strong></span> Daño extra al ataque realizado, este perdura en los turnos siguientes.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Aturdir:</strong></span> El objetivo pierde el siguiente turno de acción.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Petrificar:</strong></span> El objetivo pierde el siguiente turno de acción.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Atributo:</strong></span> Es una propiedad básica que da forma al personaje.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Cualidades:</strong></span> Es el resultado de aumentar Atributos mas la combinación de los atributos del equipo que el usuario tenga equipada en ese momento.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Poderes:</strong></span> Capacidad que se desarrolla en combate.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Habilidades:</strong></span> Son los diversos conocimientos, entrenamiento fisico y mental de un personaje.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Inscripciones:</strong></span> Gravados que entregan facultades especiales a un item determinado.</li>
        </p>
        <p>
        <li><span style="color:#F60"><strong>Bonos:</strong></span> Es una facultad que se agrega a un item.</li>
        </p>
        <p>

<li><span style="color:#F60"><strong>Resistencias:</strong></span> Capacidad de aguante ante ataques elementales o de estados alterados.</li></p>
        <p>
        <li><span style="color:#F60"><strong>Defensas contra Arma blanca/defensa contra Armas de fuego:</strong></span> Reducen el daño recibido por dichas armas (solo pvp).</li></p>
        <p>
<li><span style="color:#F60"><strong>Defensas contra monstruo/jefe/avatar:</strong></span> Reducen el daño recibido por dichas criaturas.</li></p>
        <p>
    <li><span style="color:#F60"><strong>Defensa Espiritual:</strong></span> Reduce el daño recibido por Poderes.</li></p>
        <p>
    <li><span style="color:#F60"><strong>Defensa:</strong></span> Defiende contra cualquier daño de ataques normales.</li></p>
        <p>
    <li><span style="color:#F60"><strong>Ataque:</strong></span> Golpe físico o poder que reduce la salud del objetivo.</li></p>
        <p>
    <li><span style="color:#F60"><strong>Categoría:</strong></span> Agrupación de acuerdo a las características en comun de ciertas criaturas ejemplo: No Muertos.</li></p>
        <p>
    <li><span style="color:#F60"><strong>Titulos de categoría:</strong></span> Te entrega la experticia y conocimiento que tienes acerca de un grupo de criaturas, haciendo mas eficiente el combate contra estas.</li></p>
        <p>
    <li><span style="color:#F60"><strong>Titulos de Maestría:</strong></span> Capacidad para entrenar dicípulos, los maestros obtienen ciertas regalías con el crecimiento de su dicípulo.</li></p>
        <p>
    <li><span style="color:#F60"><strong>Titulos de Prestigio:</strong></span> Modo en el que define tu honor en el mundo de los cazadores.</li></p>
        <p>
    <li><span style="color:#F60"><strong>Titulos de Desafíos:</strong></span> Modo en el que se define tu capacidad de exterminar Avatares.</li></p>
        <p>
        <li><span style="color:#F60"><strong>Puntos de Alma:</strong></span> Puntos que representan una cantidad de energía del alma, éstos les permite sacar a relucir una facultad(Poder) innata del humano para usarlo durante un tiempo,  ésto solo se utiliza en el proceso de entrenamiento del alma del personaje (nivel 10~20).</li></p>
        <p>
        <li><span style="color:#F60"><strong>Mejora de equipo:</strong></span> Puede ser mejorado de tres maneras, incrementando el poder del equipo, incorporandole bonos y con inscripciones.</li></p>
    </ul>
</div> 
                
                
                <!-- InstanceEndEditable --></div>
          </div>
        </div>
        <div id="masterbot"></div>
        
        
        
        
        </div>
        <!-- InstanceBeginEditable name="bot" -->
        <div style="background-image:url(../images/bot.png); background-repeat:no-repeat; height:28px;"></div>
        <!-- InstanceEndEditable -->
    </div>
    <div id="pie">
        <a href="http://www.corfo.cl" target="_blank"><img src="../images/logos/corfo.png" /></a>
        <a href="http://www.gob.cl" target="_blank"><img src="../images/logos/chile.png" /></a>
        <a href="http://www.lastseal.com" target="_blank"><img src="../images/logos/ls.png" /></a>
        <a href="http://www.utfsm.cl" target="_blank"><img src="../images/logos/usm.png" /></a>
        <a href="http://www.3ie.cl/" target="_blank"><img src="../images/logos/3ie.png" /></a>
    </div>
</div>

</body>
<!-- InstanceEnd --></html>
