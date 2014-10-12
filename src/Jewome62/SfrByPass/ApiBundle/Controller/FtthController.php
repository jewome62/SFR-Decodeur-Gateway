<?php

namespace Jewome62\SfrByPass\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use \Symfony\Component\DependencyInjection\ContainerInterface;

class FtthController extends Controller
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
        return $this->render('Jewome62SfrByPassApiBundle:Ftth:getInfo.xml.twig');
    }
}
