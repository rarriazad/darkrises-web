<?php
class sfFacebookFilter extends sfFilter
{
   public function execute ($filterChain)
   {
      $url    = sfConfig::get('app_frontend_base_url').'/login';
      $secret = sfConfig::get('app_facebook_secret');
      $appId  = sfConfig::get('app_facebook_app_id');

      $user = $this->getContext()->getUser();
        
      $facebook = new Facebook(array(
                   'appId'  => $appId,
                   'secret' => $secret
                   ));

      sfContext::getInstance()->getLogger()->info('Facebook object create');

      $signedRequest = $facebook->getSignedRequest();

      sfContext::getInstance()->getLogger()->info('signedRequest: '.$signedRequest);

       /* Solo al obtener el parametro $signedRequest
        * sabremos que nuestra aplicacion esta 100%
        * autorizada y conectada exitosamente con facebook
       */
       if($signedRequest)
       {

        try{
              $fbUserProfile = $facebook->api('/me');

              if($fbUserProfile['id'])
              {
                $user->setAttribute('usuario',$fbUserProfile['name']);

                $pic_square = $facebook->api( array(
                         'method' => 'fql.query',
                         'query' => 'SELECT pic_square FROM user WHERE is_app_user=1 AND uid = me()',
                         ));

                $user->setAttribute('picture',$pic_square[0]['pic_square']);

              }else{

                $user->setAttribute('usuario',false);

              }
          }
          catch( FacebookApiException $ex )
          {
               sfContext::getInstance()->getLogger()->info('No se tienen los permisos de Facebook');

               $user->setAttribute('usuario',false);
          }

        }
        else
        {
 
          $user->setAttribute('usuario',false);
        
        }

    
      $filterChain->execute();

   }
}