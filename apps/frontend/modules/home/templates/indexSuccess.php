<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dark Rises</title>
<meta property="fb:app_id" content="233902406664495" />
<meta property="og:image" content="http://photos-g.ak.fbcdn.net/photos-ak-snc7/v85006/135/233902406664495/app_1_233902406664495_865765470.gif" />
<meta property="og:description" content="La oscuridad se acerca." />
<link rel="stylesheet" href="css/coin-slider-styles.css" type="text/css" />
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/coin-slider.js"></script>

</head>

<body>

<div id="fb-root"></div>

<?php $frontend = sfConfig::get('app_frontend_base_url');?>       
       
<script type="text/javascript">
    $(document).ready(function() {
        $('#coin-slider').coinslider({ width: 632, height: 169, navigation: true, delay: 5000 });

 

        $('#auth-logoutlink').click(function(event){
            
            event.preventDefault();

            logout();


        });
    });
</script>

<div id="login">
    <?php

    if( $sf_user->getAttribute('usuario',false) == false ) { ?>
        
        <p style="padding-top:10px; padding-right:150px;"><img src="images/ico/fbk.png" width="30" height="30" /> facebook <b style="font-size:12px; padding-left:20px;"><a id="auth-loginlink" href= "<?php echo $frontend.'/login' ?>">Login</a></b></p>

    <?php } else {?>
   
    <p style="padding-top:10px; padding-right:150px;"><img src="<?php echo $sf_user->getAttribute('picture') ?>" width="30" height="30" /> <?php  echo $sf_user->getAttribute('usuario')?> <b style="font-size:12px; padding-left:20px;"><a id="auth-logoutlink" href="#logout">Salir</a></b></p>
    <?php } ;?>
</div>

<div id="contenedor">
  <div id="cabecera">
        <div id="logo">
            <div id="social">
                <a href="http://www.lastseal.com" target="_blank"><img src="images/ico/lst.png" /></a><a href="http://www.facebook.com/pages/Darkrises/449464621736915" target="_blank"><img src="images/ico/fbk.png" /></a><a href="http://www.twitter.com" target="_blank"><img src="images/ico/twt.png" /></a><!--<a href="#" target="_blank"><img src="images/ico/ing.png" /></a>-->
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
        <div id="jq">
            <div id="query">
            
            <div id='coin-slider'>
    <a href="index.html" target="_blank">
        <img src="images/jquery.jpg" />
        <span>
            <!--Muestra-->
        </span>
    </a>
    ......
    ......
    <a href="http://google.com" target="_blank">
        <img src="images/jquery2.jpg" />
        <span>
             <!--muestra-->
        </span>
    </a>
</div>




            </div>
        </div>
    </div>
    <div id="cuerpo">
        <div id="cder">
        <div id="noticias">
            <a href="http://apps.facebook.com/darkrises/"><p>31-MAY-2012:<span style="color:#d05018">Actualización</span>- Aplicación de registro en línea. <span style="color:red;"><b>[Nuevo!]</b></span>.</p></a>
            <a href="http://www.facebook.com/pages/Darkrises/449464621736915"><p>31-MAY-2012:<span style="color:#d05018">Actualización</span>- Muro de Facebook activado.</p></a>
            <a href="<?php echo $frontend.'/exclusive' ?>"><p>31-MAY-2012:<span style="color:#d05018">Actualización</span>- contenido exclusivo [solo registrados].</p></a>
        </div>
        <div style="margin-top:98px; margin-left:36px;">
            <a href="<?php echo $frontend.'/exclusive' ?>"><img src="images/registro.png" /></a>
        </div>
        <div id="cronicas">
          <p style="margin-top:20px;"><span style="font-size:18px;">Dark Rises</span></p>
          <p style="margin-top:20px;">
                El mundo está en constante cambio, las personas, sus acciones, sus necesidades, todo evoluciona con una velocidad inimaginable. 
Desde tiempos remotos han existido pruebas que indican que algo más nos acecha, no sabemos quiénes son o su cantidad, sólo hemos convivido con esa idea, siempre con la curiosidad.</p> 
<p>Ignoramos muchas cosas y entre estas el exceso de criaturas que vaga por la noche, son peligrosas y dan caza a los descuidados. Sin embargo algunos valientes comienzan a vislumbrar la realidad y han decidido luchar por  prevalecer en la tierra, han dejado de ser las presas para  ser los cazadores...</p>
<p style="margin-left:200px; color:#F00;"><b><a href="<?php echo $frontend.'/exclusive/darkrises' ?>">Leer mas...</a> <span style="color:#FFF">ó</span> <a href="<?php echo $frontend.'/exclusive/indice' ?>">Ir al Índice</a></b></p>

            
        </div>
    </div>
        <div id="video"><iframe width="398" height="224" src="http://www.youtube.com/embed/88HEBg2jXo0" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <div id="fb"><iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FDarkrises%2F449464621736915&amp;width=320&amp;height=258&amp;colorscheme=dark&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:320px; height:258px;" allowTransparency="false"></iframe></div>
        <div class="clear"></div>
    </div>
    <div id="pie">
        <a href="http://www.corfo.cl" target="_blank"><img src="images/logos/corfo.png" /></a>
        <a href="http://www.gob.cl" target="_blank"><img src="images/logos/chile.png" /></a>
        <a href="http://www.lastseal.com" target="_blank"><img src="images/logos/ls.png" /></a>
        <a href="http://www.utfsm.cl" target="_blank"><img src="images/logos/usm.png" /></a>
        <a href="http://www.3ie.cl/" target="_blank"><img src="images/logos/3ie.png" /></a>
    </div>
</div>
</body>

</html>



 
