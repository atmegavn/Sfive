<?php

namespace Discoversfive\Controller;

use Zend\View\Model\ViewModel;
use Application\Controller\BaseController;

class TeachersController extends BaseController {

    public function indexAction() {
        $contentModel = new \Application\Model\ContentModel($GLOBALS['em']);
        $data = $contentModel->findBy(array('menu' => 12), array('idarticles' => 'DESC')); //lay bài viết về đội ngũ giáo viên
        if (sizeof($data) > 0) {
            $result = 'OK';
        } else {
            $result = "Chưa có bài viết nào trong mục này";
        }
        //$result = array();
        return new ViewModel(array(
            'title' => $result,
            'content' => $data
        ));
    }

}

?>
