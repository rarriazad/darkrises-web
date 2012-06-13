<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DR Contenido Exclusivo</title>
<script type="text/javascript" src="../../js/login.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<style type="text/css">
<!--
body {
	background-color:#000;
	background-image:url(../../images/bg.png);
	background-repeat:repeat-x;
	width:100%;
	color:#FFF;
	margin:0px;
	border:0px;
	font-family:"Trajan Pro", Times New Roman, Times, serif;
}
a {
	color:#FFF;
	text-decoration:none
}
a:hover {
	color:#999;
	text-decoration:underline;
}
a img{
	border:0px;
}
p{
	margin:0px;
	padding-left:20px;
	padding-right:20px;
	padding-top:10px;
}
#emaster {
	background-image:url(../../images/exclusive/fondo.jpg);
	width:100%;
}
#etop {
	width:100%;
}
#econt {
	width:1000px;
	margin: 20px auto 20px auto ;
	color:#000;
	font-weight:bold;
}
#ebot {
	width:100%;
	text-align:center;
	font-size:12px;
	padding-bottom:30px;
	padding-top:20px;
}
.sep {
	width:100%;
	height:11px;
	background-image:url(../../images/exclusive/apart.jpg);
	background-repeat:repeat-x;
}
#ctop{
	background-image:url(../../images/exclusive/top.jpg);
	height:156px;
	font-size:100px;
	text-align:center;
}
.cmid{
	background-image:url(../../images/exclusive/cmid.jpg);
}
#cbot{
	background-image:url(../../images/exclusive/bot.png);
	height:198px;
}
#login {
	background-color:#111;
	width:100%;
	text-align:right;
	color:#999;
	border-bottom:1px solid #000;
	vertical-align:top;
	font-size:11px;
	font-family:"lucida grande",tahoma,verdana,arial,sans-serif;
	padding-bottom:3px;
}
#login a {
	color:#F00;
	text-decoration:none;
}
#login a:hover {
	color:#900;
	
}
.ctxt {
	margin-left:400px;
	margin-right:20px;
}
.inter {
	margin-left:80px;
	margin-right:20px;
}

-->
</style>
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




<div id="etop">
	<div style="float:left; width:462px;"><a href="../index.php"><img src="../../images/logo.png" /></a></div>
    <div style="float:left; width:538px; margin-left:100px; font-size:36px; padding-top:40px;">Contenido Exclusivo</div>
    <div style="clear:both"></div>
    <div style="text-align:center;">Links Rápidos</div>
    <div style="text-align:center; margin-bottom:20px;">
    	<a href="<?php echo $frontend ?>">-Inicio</a>
        <a href="<?php echo $frontend.'/exclusive/indice' ?>">-Crónicas e Historias</a>
        <a href="<?php echo $frontend.'/exclusive/artbook' ?>">-ArtBook</a>
        <a href="<?php echo $frontend.'/exclusive/bestiario' ?>">-Bestiario</a>
        <a href="<?php echo $frontend.'/exclusive/wall' ?>">-Wallpapers</a>
        
        
    </div>
</div>
    <div id="emaster">
    	<div class="sep"></div>
  		<div id="econt">
        	<div id="ctop">Cambiaformas</div>
        	<div style="background-image:url(../../images/exclusive/mob/rougarou.jpg); height:450px;">
            	<div class="ctxt">
                <p style="font-size:24px;">Rougaru</p>
                <p>Estas criaturas no presentan su metamorfosis si no hasta alcanzada la edad adulta, pero siempre presentan un gran apetito y preferencia por la carne, lo cual se hace un rasgo característicos de ellos, también es común que se pierdan por algunos días en donde liberan por completo la bestia que está en ellos. Poseen gran fuerza, destreza y sentidos muy agudos que se intensifican en su forma de bestia.</p>
<p>Son muy peculiares en su forma de vivir, ya que se insertan perfectamente en la sociedad humana, forman familias casándose con humanos y así tienen descendencia.</p>
<p>Su alimentación es como la del humano, pero su verdadero apetito es saciado con carne humana, muchas veces algún animal puede servir por un tiempo.</p>

            	</div>
          </div>
            <div class="cmid">
        
  		     <div class="inter">
             <p>Cuando llega el tiempo de su primera transformación son apoderados de un gran apetito por la carne cruda, y su instinto de cazador se hace presente, su fuerza y destreza aumentan, sus sentidos se descontrolan y sienten el impulso de cazar humanos.</p><p>Todo esto se va regulando en el tiempo de algunas semanas.</p>
             <p>Su carácter es muy variado por lo cual no es una característica para distinguirlos.
Al transformarse su apariencia es como un humano bestial, su musculatura crece un poco, aparecen colmillos y garras, y ganan algo más de bello en el cuerpo, sus ojos cambian como los de un animal, los que les permite una mejor visón para cazar.</p></div>

<!--2-->

<div style="background-image:url(../../images/exclusive/mob/transmutador.jpg); height:450px;">
       	<div class="ctxt">
          <p style="font-size:24px;">Transmutador</p>
          <p>Existe un par de teorías acerca de su origen, la más  aceptada hasta el momento es la que explica que han sido experimentos fallidos  por parte de  alquimistas con metamorfos. <br />
      Su  mayor habilidad es mutar partes de su cuerpo  a voluntad, además de otras facultades como endurecer la piel. Con los años  pueden llegar a cambiar sus órganos de lugar lo cual hace que sea aún más  difíciles de matar, a los más jóvenes les puede tomar mucho tiempo hacer esto,  en cambio a los más  viejos les puede  tomar segundos. <br />
        Su gran  habilidad es la manipulación de sus huesos, de las cuales crean armas y corazas  increíblemente resistentes para cubrir su cuerpo. Las armas que crean no son  armas de fuego ni de gran complejidad, pero si pueden ser de tipo  cortopunzantes o golpeadoras, que pueden llegar a ser más duro que el acero.</p>
                <p><strong>Altura: </strong>humano normal.<br />
                  <strong>Especiales: </strong>manipulación  celular  del cuerpo. <strong></strong></p>
                </div>
          </div>
       <div class="cmid"></div>
<!--2-->

<div style="background-image:url(../../images/exclusive/mob/metamorfo.jpg); height:450px;">
       	<div class="ctxt">
          <p style="font-size:24px;">Metamorfo</p>
          <p>Estas son criaturas que, como su nombre indica, pueden  adoptar cualquier forma. Nadie conoce la verdadera apariencia de un metamorfo,  incluso algunos son tan antiguos que ellos mismos han olvidado su apariencia  real. Estos pueden adoptar la apariencia de cualquier otra persona, incluso  algunos son capaces de adquirir las habilidades del que ha copiado. <br />
        Entre ellos  existen clanes o familias, cuyos miembros están conectados entre sí  mentalmente, estos poseen algún tipo de telepatía. Tienen una gran fuerza y son  capaces de regenerar sus extremidades y otras partes del cuerpo en solo días.  La plata les produce un gran daño y evita su regeneración sobrenatural.</p>
          <p><strong></strong></p>
                </div>
          </div>
       <div class="cmid"><div class="inter">Se cuenta que han existido metamorfos con la capacidad de dejar una pequeña parte de su cuerpo en otro lugar, por ejemplo un dedo, y conectarse mentalmente con él, de esta manera si su cuerpo es eliminado ellos son capaces de traspasar su conciencia y mente por completo a esa parte de su cuerpo, para luego volver a crecer de él.
    
Altura: persona normal.
Especiales: Gran fuerza y mutaciones del cuerpo
                      Facultades psíquicas</div>
</div>






<div id="cbot"></div>
          </div>
          
  		</div>
        <div class="sep"></div>
    </div>
  	<div id="ebot">Dark Rises y todas las imagenes asociadas con Dark Rises son propiedad de © Copyright 2012 Last Seal S A. Todos los Derechos Reservados</div>
</body>
</html>