<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Register\Controller;

use Application\Controller\BaseController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class IndexController extends BaseController {

    public function indexAction() {
        if ($GLOBALS['register'] == 'on') {
            $registerForm = new \Application\Form\RegisterForm('RegForm', array(), $GLOBALS['em']);
            $viewModel = new ViewModel(array(
                'title' => 'Đăng ký nhận khuyến mãi',
                'regform' => $registerForm
            ));
            return $viewModel;
        } else {
            return new JsonModel(array('result' => 'Module disabled'));
        }
    }

    public function addAction() {
        if ($this->getRequest()->isPost()) {
            $form = new \Application\Form\RegisterForm('RegisterForm', array(), $GLOBALS['em']);
            $RegModel = new \Application\Model\RegisterModel($GLOBALS['em']);
            $post = $this->getRequest()->getPost();
            $entity = new \Application\Entity\Register;
            $form->bind($entity);
            $form->setData($post);
            if ($form->isValid()) {
                $data = $form->getData();
                $RegModel->save(null, $data);
            } else {
                $result = array("result" => "ERROR-Form");
                return new JsonModel($result);
            }
            $result = array('result' => 'OK');
        } else {
            $result = array("result" => "ERROR");
        }
        return new JsonModel($result);
    }

}
