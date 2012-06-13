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
                    	<p style="font-size:21px;"><b>Lucy</b></p>
                        <p style="margin-left:30px; margin-right:30px; padding-top:20px;">
                        	<p>La ventana se abrió de golpe, las cortinas dibujaban extrañas siluetas a la luz de la luna llena, sintió un miedo que estremecía todo su cuerpo. En el  árbol, un sonido parecía aproximarse, entre las hojas pudo distinguir unos ojos, retrocedió unos pasos, temblorosa; temibles imágenes saltaron a su mente… cerró los ojos y se dejó caer al suelo, apoyando sus manos y agachando la mirada. Por la ventana entró la fuente de sus pesares y maulló... levantó lentamente su rostro y pudo apreciar a un pequeño gato frente a ella. </p><p style="margin-top:20px;">
Se entregó a un llanto que mezclaba todo el terror sentido con la alegría de ver solamente un pequeño gato negro, pero aquellos ojos no fueron iguales a los que la miraban entre las hojas del árbol... dudó, tomó al felino y se acercó a la ventana. Nada pudo ver, sólo el viento que volvía mover las ramas del árbol haciéndolas chocar contra la pared, emulando el sonido de garras que la llevó a entrar a aquella habitación.
Pasaron los días y Lucy adoptó al gato. Hacía tiempo que no tenía compañía. Pese a su hermosura y juventud, no había podido superar la muerte de su esposo, llevaban sólo dos años casados, pero se conocían desde la infancia cuando prometieron casarse... y así fue. </p><p style="margin-top:20px;">
Todo iba bien entre ellos, estaban pensando en tener hijos, pero una noche, cuando volvían de visitar a los padres de Giovanni, algo se atravesó en la carretera, Lucy creía haber visto a un perro, pero cuando se bajaron del coche se percataron que había sido una persona, nunca la vieron, no sabían cómo apareció… de pronto aquel cuerpo aparentemente inerte sonrió, comenzó a moverse y tomó por el cuello a Giovanni y lo lanzó por el acantilado, giró hacia Lucy, ella pareció reconocerlo, pero la golpeó antes de que pudiera decir su nombre. Al cabo de una media hora pasó un abogado por el lugar, detuvo el automóvil y vio a Lucy que sangraba, llamó a una ambulancia y a la policía. </p><p style="margin-top:20px;">
Al recobrar la conciencia, Lucy preguntó por su esposo, un insensible detective le dijo que su cuerpo quedó destrozado al chocar con las afiladas rocas, pero que por suerte no se lo llevó el mar, sino hubiese sido muy difícil de recuperar; luego comenzó con el interrogatorio, preguntando por qué su esposo se había suicidado, ella dijo que no era un suicidio y relató lo ocurrido aquella noche, recordó el nombre de aquel hombre: Benjamin Rockbell. Un tiempo antes de rencontrarse con Giovanni, Lucy conoció a Benjamin a través de un foro que él administraba, pero después de unas citas ella descubrió que no le interesaba y lo rechazó.</p><p style="margin-top:20px;">
El detective la miró extrañado, le preguntó hace cuánto tiempo ocurrió esto y ella le contestó que alrededor de unos cinco años atrás. Él frunció el ceño, le dijo que no inventase historias, Benjamin había muerto hace siete años, era imposible que él hubiese matado a su esposo. 
Pasó el tiempo y la versión final fue que Giovanni se había bajado del coche con intención de suicidarse, Lucy intentó detenerle, pero él la golpeó y luego saltó colina abajo; la escena produjo un trauma tan grande en ella que le hizo inventar una realidad alterna y se imaginó toda la situación con Benjamin a quién había conocido muchos años antes.</p><p style="margin-top:20px;">
Pero no. Ella sabía la verdad y nunca olvidaría aquella noche cinco meses atrás. Un día su nuevo inquilino desapareció, buscó al gato por toda la casa y los alrededores de ella, pero no lo encontró. Aquella noche ocurriría un hecho insólito. Lucy creyó soñar con su esposo que llegaba tarde del trabajo con su traje gris, se acostaba a su lado y tenían relaciones. Lucy quería creer que era un sueño, pero al darse cuenta de la realidad se levantó asustada y encendió la luz, vio a su esposo en la cama, sonrió, ella lloraba, pero el rostro de su esposo comenzó a cambiar, pudo distinguir a Benjamin... cayó al suelo, consternada, sin voz, desnuda a la luz de la luna que se colaba por la persiana, Benjamin se acercaba, pronunció unas palabras con la voz de Giovanni, ella gritaba y se tapaba los oídos, todo en silencio. Miró a su alrededor y no estaba ni su esposo ni Benjamin, pero apareció el felino, que la miraba con un fuego en sus ojos, se acercó a ella, creyó ver el rostro de su amado en aquel cuerpo animal, cerró los ojos y volvió a mirar al gato, esta vez le pareció descubrir el rostro de Benjamin que sonreía. Sus ojos no paraban de llorar, ni su voz abandonaba los gritos, aquella noche volvió a su memoria, no lo podía comprender. El gato se puso a su lado y maulló, ella no quiso tomarlo. El animal se comenzó a transformar, cada vez crecía un poco más, ya no era un gato negro, sino una pantera. Lucy trató de reaccionar, se intentó levantar apoyándose en la persiana que cedió, quedando la ventana descubierta... la bestia devoró lentamente a Lucy a la luz de la luna.

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
