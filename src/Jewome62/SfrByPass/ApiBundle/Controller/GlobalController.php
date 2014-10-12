<?php
namespace Jewome62\SfrByPass\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of GlobalController
 *
 * @author Jérôme
 */
class GlobalController extends Controller
{
    public function indexAction(Request $request)
    {
        $method = explode('.',$request->query->get('method'));
        $className = $method[0];
        switch($className){
            case 'ftth' :
                $controller = new FtthController();
                break;
             case 'wan' :
                $controller = new WanController();
                break;
             case 'system' :
                $controller = new SystemController();
                break;
             case 'lan' :
                $controller = new LanController();
                break;
            default :
                throw new NotFoundHttpException('Sorry not existing!');
        }
        $newMethod = $method[1];
        
        return $controller->indexAction($this->container,$newMethod);
    }
}