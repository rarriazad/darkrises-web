
  window.fbAsyncInit = function() {
	FB.init({
	  appId      : 215555631900581, // App ID
	  //channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File
	  status     : true, // check login status
	  cookie     : true, // enable cookies to allow the server to access the session
	  xfbml      : true, // parse XFBML
	  oauth		 : true
	});
	FB.Event.subscribe('auth.login', function(response) {
		if (response.status === 'connected'){
			FB.api('/me', function(user)
			{
				var name = user.last_name;
				var id = user.id;
				var gender = user.gender;
				
				if (gender == 'male'){
					gender = 0;
				}else{
					gender = 1;
				}
				
				if( id != '0' && name != '0' && id != 'undefined' && name != 'undefined'){
					 $.ajax({
						data : { "id" : id, "name" : 'Cazador '+name+'_'+id, "gender": gender},
						type : 'POST',
						crossDomain : true,
						dataType : 'jsonp',
						url : 'http://developers.darkrises.com/fmartinez/backend.php/userinfo/preregisterweb',
						//error: function(){alert("Error!");}
					}).always(function(){
						if (window.history.length>0){
						 //window.location.reload();
						}
					});
				}
			},  {scope: 'email,user_about_me,user_games_activity,user_groups,publish_actions'});
		}
    	//window.location.reload();
    });	

/*FB.Event.subscribe('auth.login', function(response) {

if (response.status === 'connected')
{
FB.api('/me', function(response)
{
var name = response.last_name;
var id = response.id;
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
data : { id : id, name : 'Cazador '+name+'_'+id, gender: gender},
type : 'POST',
crossDomain : true,
dataType : 'jsonp',
url : 'http://developers.darkrises.com/fmartinez/backend.php/userinfo/preregisterweb',
error: function(){alert("Error!");}
}).always(function(){

if (window.history.length>0){
 window.location.reload();
}

});

/*** Eliminar esta seccion cuando se active el request a lilith para el registro ***/
/*if (window.history.length>0){
window.history.go(-1);
window.location.href = app_frontend_base_url;
}else{
window.location.href = app_frontend_base_url;
}

/*******************************************************************************/
/*}else{

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
}
}
}
}, {scope: 'email,user_about_me,user_games_activity,user_groups,publish_actions'});
*/
};

(function(d){
var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
js = d.createElement('script'); js.id = id; js.async = true;
js.src = "//connect.facebook.net/en_US/all.js";
d.getElementsByTagName('head')[0].appendChild(js);
}(document));