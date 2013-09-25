<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Application\Controller\BaseController;
use Application\Model;

class SupportController extends BaseController {

    public function indexAction() {
        $view = new ViewModel(array(
            'title' => "Ms. Hoài"
        ));
        $view->setTerminal(true);
        return $view;
    }

}

?>
