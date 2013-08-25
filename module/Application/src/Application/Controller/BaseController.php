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
        parent::dispatch($request, $response);
    }

}

?>
