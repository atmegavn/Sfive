<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Controller\BaseController;

class PostController extends BaseController {

    //put your code here
    public function indexAction() {
        return new ViewModel(array(
            'title' => 'Đăng bài viết'
        ));
    }

}

?>
