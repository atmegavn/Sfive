<?php

namespace Cackhoahoc\Controller;

use Application\Controller\BaseController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class TienganhtheoyeucauController extends BaseController {

    //put your code here
    public function indexAction() {
        $contentModel = new \Application\Model\ContentModel($GLOBALS['em']);
        $data = $contentModel->findBy(array('menu' => 25), array('idarticles' => 'DESC')); //lay article trong menu: Chúng tôi là ai
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
