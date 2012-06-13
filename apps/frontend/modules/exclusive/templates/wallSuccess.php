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
        	<div style="text-align:center">
            
            	<img src="../../images/exclusive/wall/1/wallpaper800x600.jpg" /><br /><br />
                <a href="../../images/exclusive/wall/1/wallpaper800x600.jpg" target="_blank">-800x600</a>
                <a href="../../images/exclusive/wall/1/wallpaper1024x768.jpg" target="_blank">-1024x768</a>
                <a href="../../images/exclusive/wall/1/wallpaper1280x800.jpg" target="_blank">-1280x800</a>
                <a href="../../images/exclusive/wall/1/wallpaper1280x1024.jpg" target="_blank">-1280x1024</a>
                <a href="../../images/exclusive/wall/1/wallpaper1336x768.jpg" target="_blank">-1336x768</a>
                <a href="../../images/exclusive/wall/1/wallpaper1920x1080.jpg" target="_blank">-1920x1080</a><br /><br />
                
                <img src="../../images/exclusive/wall/2/wallpaper800x600.jpg" /><br /><br />
                <a href="../../images/exclusive/wall/2/wallpaper800x600.jpg" target="_blank">-800x600</a>
                <a href="../../images/exclusive/wall/2/wallpaper1024x768.jpg" target="_blank">-1024x768</a>
                <a href="../../images/exclusive/wall/2/wallpaper1280x800.jpg" target="_blank">-1280x800</a>
                <a href="../../images/exclusive/wall/2/wallpaper1280x1024.jpg" target="_blank">-1280x1024</a>
                <a href="../../images/exclusive/wall/2/wallpaper1336x768.jpg" target="_blank">-1336x768</a>
                <a href="../../images/exclusive/wall/2/wallpaper1920x1080.jpg" target="_blank">-1920x1080</a><br /><br />
                
                <img src="../../images/exclusive/wall/3/wallpaper800x600.jpg" /><br /><br />
                <a href="../../images/exclusive/wall/3/wallpaper800x600.jpg" target="_blank">-800x600</a>
                <a href="../../images/exclusive/wall/3/wallpaper1024x768.jpg" target="_blank">-1024x768</a>
                <a href="../../images/exclusive/wall/3/wallpaper1280x800.jpg" target="_blank">-1280x800</a>
                <a href="../../images/exclusive/wall/3/wallpaper1280x1024.jpg" target="_blank">-1280x1024</a>
                <a href="../../images/exclusive/wall/3/wallpaper1336x768.jpg" target="_blank">-1336x768</a>
                <a href="../../images/exclusive/wall/3/wallpaper1920x1080.jpg" target="_blank">-1920x1080</a><br /><br />
                
                <img src="../../images/exclusive/wall/4/wallpaper800x600.jpg" /><br /><br />
                <a href="../../images/exclusive/wall/4/wallpaper800x600.jpg" target="_blank">-800x600</a>
                <a href="../../images/exclusive/wall/4/wallpaper1024x768.jpg" target="_blank">-1024x768</a>
                <a href="../../images/exclusive/wall/4/wallpaper1280x800.jpg" target="_blank">-1280x800</a>
                <a href="../../images/exclusive/wall/4/wallpaper1280x1024.jpg" target="_blank">-1280x1024</a>
                <a href="../../images/exclusive/wall/4/wallpaper1336x768.jpg" target="_blank">-1336x768</a>
                <a href="../../images/exclusive/wall/4/wallpaper1920x1080.jpg" target="_blank">-1920x1080</a><br /><br />
                
                <img src="../../images/exclusive/wall/5/wallpaper800x600.jpg" /><br /><br />
                <a href="../../images/exclusive/wall/5/wallpaper800x600.jpg" target="_blank">-800x600</a>
                <a href="../../images/exclusive/wall/5/wallpaper1024x768.jpg" target="_blank">-1024x768</a>
                <a href="../../images/exclusive/wall/5/wallpaper1280x800.jpg" target="_blank">-1280x800</a>
                <a href="../../images/exclusive/wall/5/wallpaper1280x1024.jpg" target="_blank">-1280x1024</a>
                <a href="../../images/exclusive/wall/5/wallpaper1336x768.jpg" target="_blank">-1336x768</a>
                <a href="../../images/exclusive/wall/5/wallpaper1920x1080.jpg" target="_blank">-1920x1080</a><br /><br />
                
                <img src="../../images/exclusive/wall/6/wallpaper800x600.jpg" /><br /><br />
                <a href="../../images/exclusive/wall/6/wallpaper800x600.jpg" target="_blank">-800x600</a>
                <a href="../../images/exclusive/wall/6/wallpaper1024x768.jpg" target="_blank">-1024x768</a>
                <a href="../../images/exclusive/wall/6/wallpaper1280x800.jpg" target="_blank">-1280x800</a>
                <a href="../../images/exclusive/wall/6/wallpaper1280x1024.jpg" target="_blank">-1280x1024</a>
                <a href="../../images/exclusive/wall/6/wallpaper1336x768.jpg" target="_blank">-1336x768</a>
                <a href="../../images/exclusive/wall/6/wallpaper1920x1080.jpg" target="_blank">-1920x1080</a><br /><br />
                
                <img src="../../images/exclusive/wall/7/wallpaper800x600.jpg" /><br /><br />
                <a href="../../images/exclusive/wall/7/wallpaper800x600.jpg" target="_blank">-800x600</a>
                <a href="../../images/exclusive/wall/7/wallpaper1024x768.jpg" target="_blank">-1024x768</a>
                <a href="../../images/exclusive/wall/7/wallpaper1280x800.jpg" target="_blank">-1280x800</a>
                <a href="../../images/exclusive/wall/7/wallpaper1280x1024.jpg" target="_blank">-1280x1024</a>
                <a href="../../images/exclusive/wall/7/wallpaper1336x768.jpg" target="_blank">-1336x768</a>
                <a href="../../images/exclusive/wall/7/wallpaper1920x1080.jpg" target="_blank">-1920x1080</a><br /><br />
                
                <img src="../../images/exclusive/wall/8/wallpaper800x600.jpg" /><br /><br />
                <a href="../../images/exclusive/wall/8/wallpaper800x600.jpg" target="_blank">-800x600</a>
                <a href="../../images/exclusive/wall/8/wallpaper1024x768.jpg" target="_blank">-1024x768</a>
                <a href="../../images/exclusive/wall/8/wallpaper1280x800.jpg" target="_blank">-1280x800</a>
                <a href="../../images/exclusive/wall/8/wallpaper1280x1024.jpg" target="_blank">-1280x1024</a>
                <a href="../../images/exclusive/wall/8/wallpaper1336x768.jpg" target="_blank">-1336x768</a>
                <a href="../../images/exclusive/wall/8/wallpaper1920x1080.jpg" target="_blank">-1920x1080</a><br /><br />
            
            </div>
  		</div>
        <div class="sep"></div>
    </div>
  	<div id="ebot">Dark Rises y todas las imagenes asociadas con Dark Rises son propiedad de © Copyright 2012 Last Seal S A. Todos los Derechos Reservados</div>

</body>
</html>