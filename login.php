<?php session_start(); ?>
<?php

define('APP_ID', '233902406664495');

//uses the PHP SDK.  Download from https://github.com/facebook/php-sdk
require ('src/facebook.php');
require_once("sesion.class.php");

$sesion = new sesion();

$facebook = new Facebook(array(
  'appId'  => APP_ID,
  'secret' => 'f9d64b8519a49f04784f9ef66dd051b4',
));

$signed_request = $facebook->getSignedRequest();
$uid = $facebook->getUser();

$login = $sesion->get("login");

if($login && $signed_request){

  $sesion->set("login","connect");

}else{

  $sesion->set("login","non_connect");

}

$login = $sesion->get("login");

?>

<html>
<head>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<style type="text/css">
<!--
body {
	background-color:#000;
	background-image:url(img/bg.png);
	background-repeat:repeat-x;
}
-->
</style>
</head>
  <body>
  
  
    <?php if ($login === "connect") { 
      $userInfo  = $facebook->api('/me'); 
      $pic_square = $facebook->api( array(
                         'method' => 'fql.query',
                         'query' => 'SELECT pic_square FROM user WHERE is_app_user=1 AND uid = me()',
                     ));
      $sesion->set("usuario",$userInfo['name']);
      $sesion->set("picture",$pic_square[0]['pic_square']);

     echo "<script type='text/javascript'>window.location.href = 'http://darkrises.com/index.php'</script>";      
		exit; ?>
    <?php } else { ?>
    <div id="fb-root"></div>


    <!-- Aqui va el html -->
    <div style="text-align:center;">
    	<div><img src="img/llog.png"></div>
        <div style="font-size:24px;color:#FFF; font-family:Tahoma, Geneva, sans-serif;">Para acceder al contenido exclusivo, necesita estar logueado en facebook.</div>
    	<div><button id="auth-loginlink">Login</button></div>
    </div>


    <!-- Aqui termina el html -->


    <?php } ?>
    <script type="text/javascript">
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '233902406664495',
          status     : true, 
          cookie     : true,
          xfbml      : true,
          oauth      : true,
        });

        document.getElementById('auth-loginlink').addEventListener('click', function(){

          FB.login(function(response) {

              if (response.status === 'connected') 
              {
                  FB.api('/me', function(response) 
                  {
                      var name = response.last_name;
                      var id   = response.id;
                      var gender = response.gender;

                      if (gender == 'male')
                      {
                          gender = 0;
                      }else{

                          gender = 1;
                      }

                      if( id != '0' && name != '0' && id != 'undefined' && name != 'undefined')
                      {

                          $.ajax({
                                  data  : {  id    : id,
                                             name  : 'Cazador '+name+'_'+id,
                                             gender: gender
                                          },
                                    type        : 'GET',
                                    crossDomain : true,
                                    dataType    : 'jsonp',
                                    url    : 'http://lilith.darkrises.com/backend_dev.php/userinfo/preregisterweb'
                          }).always(function(){

                                        window.location.reload();

                          });

                      }else{

                          window.location.reload();
                      }
                  });
                }
          }, {scope: 'email,user_about_me,user_games_activity,user_groups,publish_actions'});

        });
      };

      (function(d){
         var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
         js = d.createElement('script'); js.id = id; js.async = true;
         js.src = "//connect.facebook.net/en_US/all.js";
         d.getElementsByTagName('head')[0].appendChild(js);
       }(document));
    </script>
  </body>
</html>
