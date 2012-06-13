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
	font-size:70px;
	text-align:center;
}
#cmid{
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
#ctxt {
	margin-left:400px;
	margin-right:20px;
}
#inter {
	margin-left:80px;
	margin-right:20px;
}
#inter a {
	color:#000;
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
        	<div id="ctop">
        	  <p>Bestiario</p></div>
        	<!--<div style="background-image:url(mob/rougarou.jpg); height:450px;"></div><-->
            <div id="cmid">
           <div id="inter">
           <p>Se menciona mucho que el planeta tierra es la creación más hermosa y completa de todas, tal vez sea así o quizás no, lo cierto es que desde su creación ha llamado la atención de muchas criaturas de distintos lugares, planos y dimensiones, por lo cual a lo largo de su historia se ha llenado de diversas criaturas que moran en la tierra, su presencia a causado mutaciones en algunos humanos provocando nuevas aberraciones.</p>
           <p style="margin-bottom:30px;">de lo poco que se sabe, ésto es lo que se ha investigado de momento:</p>
          <div style="text-align:center;">
          	<a href="<?php echo $frontend.'/exclusive/aberraciones' ?>">-Aberraciones </a><br />
            <a href="<?php echo $frontend.'/exclusive/cambiaformas' ?>">-Cambiaformas </a><br />
          </div>
			</div>

              <div id="cbot"></div>
          </div>
          
  		</div>
        <div class="sep"></div>
    </div>
  	<div id="ebot">Dark Rises y todas las imagenes asociadas con Dark Rises son propiedad de © Copyright 2012 Last Seal S A. Todos los Derechos Reservados</div>

</body>
</html>