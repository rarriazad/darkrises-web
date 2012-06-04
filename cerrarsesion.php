<?php session_start(); ?>
<div id="fb-root"></div>
<?php
   require_once("sesion.class.php");
   $sesion = new sesion();
   $usuario = $sesion->get("usuario");

   if( $usuario == false ) {
      echo "<script type='text/javascript'>window.location.href = 'http://darkrises.com/index.php'</script>";      
		exit;
   }  else  {
      $sesion->termina_sesion();
   ?>
   
   <script type="text/javascript">
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '233902406664495',
          status     : true, 
          cookie     : true,
          xfbml      : true,
          oauth      : true,
        });

         FB.getLoginStatus(function(response){
              if (response.status === 'connected'){
              // the user is logged in and connected to your
              // app, and response.authResponse supplies
              // the user’s ID, a valid access token, a signed
              // request, and the time the access token 
              // and signed request each expire
              var uid = response.authResponse.userID;
              var accessToken = response.authResponse.accessToken;

              FB.logout(function(response){

                  window.location.reload();
              });

              }else{

               window.location.reload();
              }
         });
      };

      (function(d){
         var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
         js = d.createElement('script'); js.id = id; js.async = true;
         js.src = "//connect.facebook.net/en_US/all.js";
         d.getElementsByTagName('head')[0].appendChild(js);
       }(document));
   </script>

<?php } ?>