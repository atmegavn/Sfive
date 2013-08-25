<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Documents\Controller;

use Application\Controller\BaseController;
use Zend\View\Model\ViewModel;

class IndexController extends BaseController {

    public function indexAction() {
        $docsModel = new \Application\Model\DocumentModel($GLOBALS["em"]);
        $data = $docsModel->findAll();
        return new ViewModel(array(
            'docs' => $data
        ));
    }

}
