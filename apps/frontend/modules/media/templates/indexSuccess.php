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
                <a href="http://www.lastseal.com" target="_blank"><img src="../images/ico/lst.png" /></a><a href="http://www.facebook.com" target="_blank"><img src="../images/ico/fbk.png" /></a><a href="http://www.twitter.com" target="_blank"><img src="../images/ico/twt.png" /></a><!--<a href="#" target="_blank"><img src="../../images/ico/ing.png" /></a>-->
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
                
                <div style="width:800px; margin-left:auto; margin-right:auto; ">
                	<span style="color:#F60; font-size:28px;"><strong>Media</strong></span>
                	<div style="padding-top:15px;">
                    	<div><span style="color:#F60; font-size:18px;"><strong>Wallpaper</strong></span></div>
                        <div style="width:448px; padding-top:20px; padding-bottom:20px;float:left;"><a href="<?php echo $frontend.'/exclusive' ?>"><img src="../images/wallp/w1.jpg" /></a></div>
                        <div style="width:224px; float:left; padding-top:20px; padding-bottom:20px; margin-left:60px;"><a href="<?php echo $frontend.'/exclusive' ?>"><img src="../images/wallp/w2.jpg" /></a></div>
                        <div style="width:224px; float:left; padding-top:20px; padding-bottom:20px; margin-left:60px;"><a href="<?php echo $frontend.'/exclusive' ?>"><img src="../images/wallp/w3.jpg" /></a></div>
                        <div class="clear"></div>
                        <div style="text-align:center; margin-bottom:20px;"><a href="<?php echo $frontend.'/exclusive' ?>">Ver Mas...</a></div>
                    	<div style="width:400px; float:left;">
                            <div><span style="color:#F60; font-size:18px;"><strong>Artwork</strong></span></div>
                            <div style="width:392px; margin-left:auto; margin-right:auto; padding-top:20px;"><a href="<?php echo $frontend.'/exclusive' ?>"><img src="../images/art/art1muestra.jpg" /></a></div>
                            <div style="width:392px; margin-left:auto; margin-right:auto; padding-top:20px;"><a href="<?php echo $frontend.'/exclusive' ?>"><img src="../images/art/art2muestra.jpg" /></a></div>
                            <div style="width:392px; margin-left:auto; margin-right:auto; padding-top:20px;"><a href="<?php echo $frontend.'/exclusive' ?>"><img src="../images/art/art3muestra.jpg" /></a></div>
                            <div style="text-align:center; padding-top:20px;"><a href="<?php echo $frontend.'/exclusive' ?>">Ver mas...</a></div>
                        </div>
                    	<div style="width:400px; float:left;">
                        	<div><span style="color:#F60; font-size:18px; padding-left:10px;"><strong> Bestiario</strong></span></div>
                            <div style="text-align:center; padding-top:20px;"><a href="<?php echo $frontend.'/exclusive' ?>"><img src="../images/art/best0muestra.jpg" /></a></div>
                            <div style="text-align:center; padding-top:20px;"><a href="<?php echo $frontend.'/exclusive' ?>"><img src="../images/art/best1muestra.jpg" /></a></div>
                            <div style="text-align:center; padding-top:20px;"><a href="<?php echo $frontend.'/exclusive' ?>">Ver mas...</a></div>
                            <!-- <div><span style="color:#F60; font-size:18px;"><strong>Videos</strong></span></div> -->
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
