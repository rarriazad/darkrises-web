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
                    	<p style="font-size:21px;"><b>El Coleccionista</b></p>
                        <p style="margin-left:30px; margin-right:30px; padding-top:20px;">
                        	<p>Despertar y leer, nuevamente, en el diario acerca de un homicidio más me causa náuseas. Ya van casi  seis meses que descubren cuerpos sin vida por toda la ciudad, son encontrados en parques en los callejones, en los estacionamientos, todos con el mismo patrón: son encontrados desnudos y sin rostro, es por eso que el asesino es  apodado  el “Coleccionista de Máscaras”. </p><p style="margin-top:20px;">
No soy policía ni detective, pero luego de treinta y cinco homicidios comencé a cuestionarme qué es lo que realmente sucede. El asesino no deja huellas, ni nada que logre identificarlo, tampoco hay sobrevivientes  en sus ataques, nadie ha podido obtener algún patrón de cómo elige a sus víctimas. La policía ha comenzado a dejar el caso, pero claro, esto no pasa desapercibido. </p><p style="margin-top:20px;">
Descubrí que son seis los lugares donde  deja a sus víctimas. Conversé con el novio de mi hermana, que se especializa en instalación de cámaras de seguridad, y le pagué por un servicio completo,  él, algo intrigado, aceptó mi oferta e instaló cámaras en los lugares que pedí, definitivamente quiero averiguar qué rayos sucede.</p><p style="margin-top:20px;">
Después de esperar casi dos semanas, por fin apareció en el diario otro ataque del Coleccionista. Ese mismo día, luego del desayuno, partí a buscar las cintas; habían encontrado el cuerpo sin vida en el parque,  fue al primer lugar que me dirigí. Luego de recolectar todas las cintas regresé a casa, estaba un poco emocionado de saber quién era, aquella emoción terminó rápidamente, ya que todas las cintas habían sido cortadas después de las diez de la noche, todas al mismo tiempo, las revisé una y otra vez, no podía convencerme de lo que sucedía, si el Coleccionista estaba en un solo lugar, ¿cómo pudo haber intervenido todas las cámaras al mismo tiempo?.</p><p style="margin-top:20px;">
De tanto repetir las malditas cintas noté que un sujeto aparecía todos los días en la mayoría de las grabaciones antes de las diez de la noche .Esta persona parecía bastante sospechosa, así que decidí buscarlo en el primer lugar donde se dejaba ver, el parque Unitted, cerca de las nueve de la noche. El parque está olvidado luego de tanto incidente, la gente se niega a salir de sus casas. De pronto, una  figura comienza a rondar por los árboles, mi corazón se acelera, distinguí al tipo de la cinta. Ni siquiera alcancé a meditar en seguirlo silenciosamente o esperar algún otro movimiento, solo corrí detrás de él como un idiota, hasta que sentí un gran golpe en la cara. </p><p style="margin-top:20px;">
Desperté con un dolor de cabeza insoportable, descubrí  que mis manos estaban atadas y que tenía un paño en la boca, ¡pero qué carajo!, no puedo creer que me haya agarrado tan fácil. Siento pasos acercándose, y solo segundos después una mano saca la venda que tapa mi boca, lo miré nuevamente, era el mismo tipo de las cintas y gritando le dije:</p><p style="margin-top:20px;">
-	“Tú,  asesino, por fin nos vemos las caras, después de treinta y cinco homicidios, sin huellas, sin nada que seguir.”</p><p style="margin-top:20px;">
Aquel tipo con cara de interrogación me gritó que guardara silencio, que quién me buscó por tanto tiempo fue él, y ahora debía mostrar mi verdadera identidad. Sentí que él estaba mal de la cabeza pues mi verdadera identidad siempre ha sido ésta. </p><p style="margin-top:20px;">
-	¡Pero qué rayos!, hombre, este que ves aquí soy yo ¿o acaso estás ciego?</p><p style="margin-top:20px;">
El tipo mirándome me preguntó cuál era mi nombre, yo contesté que no le daría mi identidad a un asesino, molesto dijo que él no era ningún asesino, y yo me defendí diciendo que no era lo que él insinuaba, que yo buscaba al Coleccionista de Máscaras y si él buscaba a la misma persona,  tenía a la equivocada.</p><p style="margin-top:20px;">
Se acercó con un arma en la mano, me soltó y preguntó: ¿Tú sabes qué es el Coleccionista?</p><p style="margin-top:20px;">
Me molestó su pregunta, pero respondí:-“Claro, ¡un asesino!…-</p><p style="margin-top:20px;">
-	¡Asesino!, eso es más que un asesino y si te explicara quizás ni siquiera me creerías. </p><p style="margin-top:20px;">
 No existía forma en que eso pasara inadvertido para mí, quería la verdad  e inmediatamente me percaté que este tipo  sabía perfectamente qué  buscaba.</p><p style="margin-top:20px;">
Agachando la mirada, me explicó que aquello era un ser de extraña procedencia, se les llama metamorfo, aquellos seres cambian fácilmente de forma, algunos son capaces de adquirir habilidades copiando a otros. Sin embargo, me explicó que este no es el único y existen clanes escondidos. También dijo que, últimamente, han decidido salir a la luz, aunque no todas las personas están al tanto de lo que sucede.</p><p style="margin-top:20px;">
Pensé que esto era una broma, pero aquel tipo hablaba con mucha convicción y no me quedó más que creerle. Cuando mis dudas por saber  quién era él y por qué buscaba a esta extraña criatura surgieron, comenzó a presentarse. Se  autodenominó un cazador de seres sobrenaturales, pero no dijo su nombre. Me explicó que era hora de abrir los ojos, que no todo es como parece y que tenía que comenzar a acostumbrarme a cosas de esta índole. Me dio una dirección y me pidió que me presentara ahí después, ya que pronto llegaría el momento de saber más.</p><p style="margin-top:20px;"> 
Después de esta pequeña charla me dejó en casa,   desde entonces espero con ansias volverlo a encontrar. Ya es hora de saber quiénes somos y a quiénes tenemos a nuestro alrededor.
</p>
                                                                                       <p style="text-align:right; margin-top:20px; margin-right:150px;">Lewis Petters</p> 


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
