<?php

namespace DarkRises\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

include_once __DIR__.'/../Facebook/facebook.php';

class DefaultController extends Controller
{
	public function wallpaperAction($number, $address)
    {
    	$userInfo = $this->setFacebook();
    	
    	$this->get("session")->clear();
    	
    	if($userInfo != null){
			return $this->render('DarkRisesWebBundle:Default:seen-wallpaper.html.twig', 
        		array(
        			'wallpaper' => "img/wallpaper/highres/".$number."/".$address
        		)
        	);
		}else{
        	return $this->render('DarkRisesWebBundle:Default:inicio.html.twig', 
        		array(
        			'facebook' => $userInfo, 
        			'breadcrums' => array( 
        				0 => array('crum' => "Dark Rises", 'address' => "/" )
        			)
        		)
        	);
        }
			 
    }
   	public function refreshAction()
   	{
   		$session = $this->get("session");
   		$session->clear();
    	return $this->render('<script type="text/javascript"> document.location.href= "'.$session->get('referrer').'"</script>');
   	}
    
    public function indexAction($name, $second)
    {	
		$userInfo = $this->setFacebook();

		$session = $this->get("session");
			
		$breadcrums0 = "Dark Rises";
		
		if($name == "media"){
			$breadcrums1 = "Media";
			 
			 if($userInfo == null){
				$second = "empty";
			 }
			 
			 if($second == "wallpaper"){
				$breadcrums2 = "Wallpapers";
				return $this->render('DarkRisesWebBundle:Default:wallpaper.html.twig', 
					array(
							'facebook' => $userInfo, 
							'breadcrums' => array( 
								0 => array('crum' => $breadcrums0, 'address' => "/" ), 
								1 => array('crum' => $breadcrums1, 'address' => "/".$name."/" ), 
								2 => array('crum' => $breadcrums2, 'address' => "/".$name."/".$second."/" )
							)
						)
					);
			}else if($second == "artwork"){
				$breadcrums2 = "Artwork";
				return $this->render('DarkRisesWebBundle:Default:artwork.html.twig', 
					array(
							'facebook' => $userInfo, 
							'breadcrums' => array( 
								0 => array('crum' => $breadcrums0, 'address' => "/" ), 
								1 => array('crum' => $breadcrums1, 'address' => "/".$name."/" ), 
								2 => array('crum' => $breadcrums2, 'address' => "/".$name."/".$second."/" )
							)
						)
					);
			}else if($second == "empty"){
			 	return $this->render('DarkRisesWebBundle:Default:media.html.twig', 
					array(
						'facebook' => $userInfo, 
						'breadcrums' => array( 
							0 => array('crum' => $breadcrums0, 'address' => "/" ), 
							1 => array('crum' => $breadcrums1, 'address' => "/".$name."/" )
						)
					)
				 );
			}
        }else if($name == "guia"){
			$breadcrums1 = "Guia del Juego";
			if($second == "quees"){
				$breadcrums2 = "¿Qué es Dark Rises?";
				return $this->render('DarkRisesWebBundle:Default:quees.html.twig', 
					array('facebook' => $userInfo, 
							'breadcrums' => array( 
								0 => array('crum' => $breadcrums0, 'address' => "/" ), 
								1 => array('crum' => $breadcrums1, 'address' => "/".$name."/" ), 
								2 => array('crum' => $breadcrums2, 'address' => "/".$name."/".$second."/" )
							)
						)
					);
			}else{
				 return $this->render('DarkRisesWebBundle:Default:quees.html.twig',
					array(
						'facebook' => $userInfo, 
						'breadcrums' => array( 
							0 => array('crum' => $breadcrums0, 'address' => "/" ), 
							1 => array('crum' => $breadcrums1, 'address' => "/".$name."/" )
						)
					)
				 );
			}
        }else if($name == "inicio"){
			$breadcrums1 = "Inicio";
			 return $this->render('DarkRisesWebBundle:Default:inicio.html.twig',
				array(
					'facebook' => $userInfo, 
					'breadcrums' => array( 
						0 => array('crum' => $breadcrums0, 'address' => "/" ), 
						1 => array('crum' => $breadcrums1, 'address' => "/".$name."/" )
					)
				)
			 );
        }else if($name == "eventos"){
        	
        	if($session->has("eventos1"))
        		$session->set('eventos1', 'passed'); 
        	else{
        		$session->start();
        		$session->set('eventos1', 'first'); 
        	}
        
			$breadcrums1 = "Eventos";
			 return $this->render('DarkRisesWebBundle:Default:evento-sello.html.twig',
				array(
					'facebook' => $userInfo, 
					'breadcrums' => array( 
						0 => array('crum' => $breadcrums0, 'address' => "/" ), 
						1 => array('crum' => $breadcrums1, 'address' => "/".$name."/" )
					),
					'session' => $session->get('eventos1')
				)
			 );
        }else{
        	if($session->has("eventos1"))
        		$session->set('eventos1', 'passed'); 
        	else{
        		$session->set('eventos1', 'first'); 
        	}
			return $this->render('DarkRisesWebBundle:Default:evento-sello.html.twig', 
				array(
					'facebook' => $userInfo, 
					'breadcrums' => array( 
						0 => array('crum' => $breadcrums0, 'address' => "/" )
					),
					'session' => $session->get('eventos1')
				)
			);		
        }
    }
    
    private function setFacebook(){
    	$facebook = new \Facebook(array(
		  'appId'  => 215555631900581,
		  'secret' => '10b407375d68227eb7ae1943dd28d3c3',
		));
		
		$userId = $facebook->getUser();
		
		if($userId)
			$userInfo = $facebook->api('/' + $userId);
		else
			$userInfo = null;
		
		return $userInfo;
    }
}
