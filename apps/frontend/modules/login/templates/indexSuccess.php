<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dark Rises - Login</title>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<style type="text/css">
<!--
body {
	background-color:#000;
	background-image:url(../images/bg.png);
	background-repeat:repeat-x;
}
-->
</style>
<?php echo '<script type="text/javascript">app_facebook_app_id="'.sfConfig::get('app_facebook_app_id').'"</script>' ?>
<?php echo '<script type="text/javascript">app_frontend_base_url="'.sfConfig::get('app_frontend_base_url').'"</script>' ?>

</head>
  <body>
  
    <div id="fb-root"></div>


    <!-- Aqui va el html -->
    <div style="text-align:center;">
    	<div><img src="../images/llog.png"></div>
        <div style="font-size:24px;color:#FFF; font-family:Tahoma, Geneva, sans-serif;">Para acceder al contenido exclusivo, necesita estar logueado en facebook.</div>
    	<div><button id="auth-loginlink">Login</button></div>
    </div>


    <!-- Aqui termina el html -->

    <script type="text/javascript">
      
      window.fbAsyncInit = function() {
        FB.init({
          appId      : app_facebook_app_id,
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

/*                          $.ajax({
                                  data  : {  id    : id,
                                             name  : 'Cazador '+name+'_'+id,
                                             gender: gender
                                          },
                                    type        : 'GET',
                                    crossDomain : true,
                                    dataType    : 'jsonp',
                                    url    : 'http://lilith.darkrises.com/backend_dev.php/userinfo/preregisterweb'
                          }).always(function(){

                                        window.history.back();

                          });
*/
                          if (window.history.length>0){
                            window.history.go(-1);
                            window.location.href = app_frontend_base_url; 
                          }else{
                            window.location.href = app_frontend_base_url; 
                          }
                      }else{

                          if (window.history.length>0){
                            window.history.go(-1);
                            window.location.href = app_frontend_base_url; 
                          }else{
                            window.location.href = app_frontend_base_url; 
                          }
                      }
                  });

                }else{
                          if (window.history.length>0){
                            window.history.go(-1);
                            window.location.href = app_frontend_base_url; 
                          }else{
                            window.location.href = app_frontend_base_url; 
                          }
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
