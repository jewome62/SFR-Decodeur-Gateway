<?php

namespace Jewome62\SfrByPass\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FtthController extends Controller
{
    public function indexAction($method)
    {
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
