<?php

namespace Jewome62\SfrByPass\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LanController extends Controller
{
    public function indexAction($method)
    {
        switch($method){
            case 'getHostsList' :
                return $this->getInfo();
                break;
            default :
                throw new NotFoundHttpException('Sorry not existing!');
        }
    }
    
    public function getInfo() {
        return $this->render('Jewome62SfrByPassApiBundle:Lan:getHostsList.xml.twig');
    }
}
