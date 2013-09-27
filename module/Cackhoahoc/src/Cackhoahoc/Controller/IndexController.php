<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Cackhoahoc\Controller;

use Application\Controller\BaseController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class IndexController extends BaseController {

    public function indexAction() {
        //$registerForm = new \Application\Form\RegisterForm('RegForm', array(), $GLOBALS['em']);
        $viewModel = new ViewModel(array(
            'title' => 'index action các khóa học',
                //'regform' => $registerForm
        ));
        return $viewModel;
    }

}
