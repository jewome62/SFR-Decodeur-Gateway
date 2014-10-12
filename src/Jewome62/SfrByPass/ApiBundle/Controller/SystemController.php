<?php

namespace Jewome62\SfrByPass\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use \Symfony\Component\DependencyInjection\ContainerInterface;

class SystemController extends Controller
{
    public function indexAction(ContainerInterface $container,$method)
    {
        $this->setContainer($container);
        switch($method){
            case 'getInfo' :
                return $this->getInfo();
                break;
            default :
                throw new NotFoundHttpException('Sorry not existing!');
        }
    }
    
    public function getInfo() {
        $date = new \DateTime();
        
        return $this->render('Jewome62SfrByPassApiBundle:System:getInfo.xml.twig', array(
            'ref_client' => $this->container->getParameter('ref_client'),
            'mac_address' => $this->container->getParameter('mac_address'),
            'uptime' => rtrim(shell_exec('uptime | awk \'{ split($3,a,":"); print (a[1]*60+a[2])*60 }\'')),
            'current_datetime' => $date->format('YmdHi')
        ));
    }
}
