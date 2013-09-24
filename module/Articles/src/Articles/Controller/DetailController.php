<?php

namespace Articles\Controller;

use Application\Controller\BaseController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class DetailController extends BaseController {

    //put your code here
    public function indexAction() {
        $key = $this->params('id');
        $contentModel = new \Application\Model\ContentModel($GLOBALS['em']);
        $data = $contentModel->findBy(array('idarticles' => $key)); //lay article trong menu: Chúng tôi là ai
        if (sizeof($data) > 0) {
            $title = $data[0]->getTitle();
            $content = $data[0]->getContents();
        } else {
            $title = "Không tìm thấy bài viết nào";
            $content = "";
        }
        return new ViewModel(array(
            'title' => $title,
            'content' => $content
        ));
    }

}

?>
