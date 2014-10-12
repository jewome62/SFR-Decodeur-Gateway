<?php

namespace Jewome62\SfrByPass\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use \Symfony\Component\DependencyInjection\ContainerInterface;

class LanController extends Controller
{
    public function indexAction(ContainerInterface $container,$method)
    {
        $this->setContainer($container);
        switch($method){
            case 'getHostsList' :
                return $this->getHostsList();
                break;
            default :
                throw new NotFoundHttpException('Sorry not existing!');
        }
    }
    
    public function getHostsList() {
        
        $decodeurs = $this->getDoctrine()->getRepository('Jewome62\SfrByPass\ApiBundle\Entity\Decodeur')->findAll();
        
        return $this->render('Jewome62SfrByPassApiBundle:Lan:getHostsList.xml.twig',
                array('decodeurs' => $decodeurs));
    }
}
