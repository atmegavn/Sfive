<?php

namespace Register\Controller;

use Application\Controller\BaseController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class KiemtratrinhdoController extends BaseController{

    //put your code here
    public function indexAction() {
        if ($GLOBALS['register'] == 'on') {
            $registerForm = new \Application\Form\TestForm('testForm', array(), $GLOBALS['em']);
            $viewModel = new ViewModel(array(
                'title' => 'Đăng ký kiểm tra trình độ',
                'regform' => $registerForm
            ));
            return $viewModel;
        } else {
            return new JsonModel(array('result' => 'Module disabled'));
        }
    }

}

?>
