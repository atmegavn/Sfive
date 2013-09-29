<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BaseController extends AbstractActionController {

    protected $em;

    public function getEntityManager() {
        if ($this->em === null) {
            if (!isset($GLOBALS["em"])) {
                $GLOBALS["em"] = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
            } else {
                $this->em = $GLOBALS["em"];
            }
        }

        return $this->em;
    }

    public function dispatch(\Zend\Stdlib\RequestInterface $request, \Zend\Stdlib\ResponseInterface $response = null) {
        if (!isset($GLOBALS["em"])) {
            $GLOBALS["em"] = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        }
        //lấy authen key
        $parModel = new \Application\Model\ParamaterModel($GLOBALS["em"]);
        $par = $parModel->find(1);
        $GLOBALS['key'] = $par->getKey();
        //lấy control panel key
        $controlPanelModel = new \Application\Model\ControlpanelModel($GLOBALS["em"]);
        $control = $controlPanelModel->find(1);
        $GLOBALS['register'] = $control->getValue();
        //có bật popup quảng cáo hay không
        $controlPanelModel = new \Application\Model\ControlpanelModel($GLOBALS["em"]);
        $control = $controlPanelModel->find(3);
        $GLOBALS['popup'] = $control->getValue();
        
        parent::dispatch($request, $response);
    }

}

?>
