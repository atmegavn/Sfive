<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Application\Controller\BaseController;
use Application\Model;

class SupportController extends BaseController {

    public function indexAction() {
        $spModel = new \Application\Model\SupportModel($GLOBALS['em']);
        $support = $spModel->findBy(array('online' => 1));
        if (sizeof($support) > 0) {
            $view = new ViewModel(array(
                'result' => "OK",
                'data' => $support
            ));
        } else {
            $view = new ViewModel(array(
                'result' => "ERROR",
                'data' => ''
            ));
        }
        $view->setTerminal(true);
        return $view;
    }

}

?>
