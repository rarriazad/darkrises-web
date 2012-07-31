<?php

namespace DarkRises\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use DarkRises\WebBundle\Entity\Fanart;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;

include_once __DIR__.'/../Facebook/facebook.php';

class AdminController extends Controller
{
	public function uploadFanartAction()
    {
    	$fanart = new Fanart();
    	$fanart->setAgregado(new \DateTime('today'));
    	
    	error_log("Hola!");
    	
    	$form = $this->createFormBuilder($fanart)
            ->add('file')
            ->add('agregado', 'date')
            ->getForm();
        
        error_log("Hola!");
        
        return $this->render('DarkRisesWebBundle:Admin:upload.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
