<?php

namespace Jewome62\SfrByPass\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use \Symfony\Component\DependencyInjection\ContainerInterface;

class WanController extends Controller
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
        return $this->render('Jewome62SfrByPassApiBundle:Wan:getInfo.xml.twig',array(
            'uptime' => rtrim(shell_exec('uptime | awk \'{ split($3,a,":"); print (a[1]*60+a[2])*60 }\'')),
            'ip_external' => trim(file_get_contents('http://ipv4.wtfismyip.com/text'))
        ));
    }
}
