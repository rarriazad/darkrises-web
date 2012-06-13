function logout(){

      window.fbAsyncInit = function() {
        FB.init({
          appId      : '168032143261873',
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
}