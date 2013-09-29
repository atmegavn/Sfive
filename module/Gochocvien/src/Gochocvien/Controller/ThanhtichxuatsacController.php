<?php

namespace Gochocvien\Controller;

use Application\Controller\BaseController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class ThanhtichxuatsacController extends BaseController {

    //put your code here
    public function indexAction() {
        $contentModel = new \Application\Model\ContentModel($GLOBALS['em']);
        $data = $contentModel->findBy(array('menu' => 15), array('idarticles' => 'DESC')); //lay bài viết về đội ngũ giáo viên
        if (sizeof($data) > 0) {
            $result = 'OK';
        } else {
            $result = "ERROR";
        }
        //$result = array();
        return new ViewModel(array(
            'result' => $result,
            'data' => $data
        ));
    }

}

?>
