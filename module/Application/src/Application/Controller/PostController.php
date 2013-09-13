<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Application\Controller\BaseController;
use Application\Model;

class PostController extends BaseController {

    //put your code here
    public function indexAction() {
        $content = new \Application\Form\ContentForm();
        $viewModel = new ViewModel(array(
            'title' => 'Quản lý bài viết123',
            'form' => $content
        ));
        return $viewModel;
    }

    public function listAction() {
        $contentModel = new Model\ContentModel($GLOBALS['em']);
        $data = $contentModel->findAll();
        $items = array();
        foreach ($data as $idata) {
            $item['id'] = $idata->getId();
            $item['title'] = $idata->getTitle();
            $item['created'] = $idata->getCreated()->format('d-M-Y');
            $item['introText'] = strip_tags($idata->getIntrotext());
            $items[] = $item;
        }
        $result = array('Result' => 'OK', 'Records' => $items);
        return new JsonModel($result);
    }

}

