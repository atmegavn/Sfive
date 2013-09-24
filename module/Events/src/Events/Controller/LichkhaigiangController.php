<?php

namespace Events\Controller;

use Zend\View\Model\ViewModel;
use Application\Controller\BaseController;

class LichkhaigiangController extends BaseController {

    public function indexAction() {
        $contentModel = new \Application\Model\ContentModel($GLOBALS['em']);
        $data = $contentModel->findBy(array('menu' => 28), array('idarticles' => 'DESC')); //lay bài viết về đội ngũ giáo viên
        if (sizeof($data) > 0) {
            $title = $data[0]->getTitle();
            $content = $data[0]->getContents();
        } else {
            $title = "Chưa có bài viết nào trong mục này";
            $content = "";
        }
        //$result = array();
        return new ViewModel(array(
            'title' => $title,
            'content' => $content
        ));
    }

}

?>
