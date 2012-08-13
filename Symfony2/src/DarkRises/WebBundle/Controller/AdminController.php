<?php

namespace DarkRises\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use DarkRises\WebBundle\Entity\Fanart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

include_once __DIR__.'/../Facebook/facebook.php';

class AdminController extends Controller
{
	public function uploadFanartAction()
    {
    	$fanart = new Fanart();
    	$fanart->setAgregado(new \DateTime());
    	
    	$form = $this->createFormBuilder($fanart)
            ->add('file')
            ->add('autor', 'text')
            ->getForm();
            
        if ($this->getRequest()->getMethod() === 'POST') {
        
			$form->bindRequest($this->getRequest());
			
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($fanart);
				$em->flush();
			} 
			
		}
        
        return $this->render('DarkRisesWebBundle:Admin:upload.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function mainAction()
    {
    	return $this->render('DarkRisesWebBundle:Admin:base.html.twig');	
    }
}
