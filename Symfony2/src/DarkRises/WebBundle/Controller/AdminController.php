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
            'form' => $form->createView(),
            'upload' => 'upload'
        ));
    }
    
    public function editFanartAction($id)
    {
    	$em = $this->getDoctrine();
    	$fanart = $em->getRepository('DarkRisesWebBundle:Fanart')->find($id);
    	
    	$form = $this->createFormBuilder($fanart)
            ->add('file')
            ->add('autor', 'text')
            ->getForm();
            
        if ($this->getRequest()->getMethod() === 'POST') {
        	
			$form->bindRequest($this->getRequest());
				
			$em = $this->getDoctrine()->getEntityManager();
			$em->persist($fanart);
			$em->flush();
			
			echo $fanart->getPath();
			
		}
        
        return $this->render('DarkRisesWebBundle:Admin:upload.html.twig', array(
            'form' => $form->createView(),
            'upload' => 'edit',
            'id' => $id,
            'fanart' => "/".$fanart->getUploadDir()."/".$fanart->getId().$fanart->getPath()
        ));
    }
    
    public function mainAction()
    {
    	return $this->render('DarkRisesWebBundle:Admin:base.html.twig');	
    }
    
    public function listFanartAction()
    {
    	$repository = $this->getDoctrine()->getRepository('DarkRisesWebBundle:Fanart');
    	$fanart = $repository->findAll();
    	
    	return $this->render('DarkRisesWebBundle:Admin:edit-list.html.twig', array(
            'list' => $fanart,
            'uploadDir' => $fanart[0]->getUploadDir()
        ));
    }
    
    public function deleteFanartAction($id)
    {
    	$em = $this->getDoctrine();
    	$fanart = $em->getRepository('DarkRisesWebBundle:Fanart')->find($id);
    	
    	$em->getEntityManager()->remove($fanart);
    	$em->getEntityManager()->flush();
    	
    	return $this->redirect($this->generateUrl("DarkRisesWebBundle_adminfanartlistpage"));
    }
}
