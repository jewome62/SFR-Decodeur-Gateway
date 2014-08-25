<?php
namespace Jewome62\SfrByPass\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Description of GlobalController
 *
 * @author Jérôme
 */
class GlobalController extends Controller
{
    public function indexAction(Request $request)
    {
        $className = preg_replace("#^(/D+)\.(/D+)$#",'$1',$request->query->get('name'));
        var_dump($method,$className);
        switch($className){
            case 'ftth' :
                $controller = new FtthController();
             case 'wan' :
                $controller = new WanController();
             case 'system' :
                $controller = new SystemController();
             case 'lan' :
                $controller = new LanController();
            default :
                throw new NotFoundHttpException('Sorry not existing!');
        }
        $newMethod = preg_replace("#^(/D+)\.(/D+)$#",'$2',$request->query->get('name'));
        
        return $controller->indexAction($newMethod);
    }
}