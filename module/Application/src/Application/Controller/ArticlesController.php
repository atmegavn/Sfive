<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Application\Controller\BaseController;
use Application\Model;

class ArticlesController extends BaseController {

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
        $cmd = $this->getRequest()->getPost('cmd');
        $title = $this->getRequest()->getPost('title');
        $type = $this->getRequest()->getPost('type');
        $db = $contentModel->getQueryBuilder();
        $db->addOrderBy('TblContent.id', 'DESC');
        switch ($cmd) {
            //load đề tài của current userr
            case 0:
                break;
            //nút tìm kiếm
            case 1:
                $db->andWhere("TblContent.title like '%" . $title . "%'");
                if ($type != null) {
                    $db->andWhere("TblContent.catid= " . $type);
                }
                break;
        }
        $items = array();
        $data = $contentModel->getQueryResult();
        foreach ($data as $idata) {
            $item['id'] = $idata->getId();
            $item['title'] = $idata->getTitle();
            $item['created'] = $idata->getCreated()->format('d-M-Y');
            $item['introText'] = strip_tags($idata->getIntrotext());
//            $item['fullText'] = strip_tags($idata->getFulltext());
            $items[] = $item;
        }
        $result = array('Result' => 'OK', 'Records' => $items);
        $json = new JsonModel($result);
        return $json;
    }

    public function createAction() {
        $content = new \Application\Form\CreateContentform('contentForm', array(), $GLOBALS['em']);
        $viewModel = new ViewModel(array(
            'crform' => $content
        ));
        //$viewModel->setTerminal(true);
        return $viewModel;
    }

    public function addAction() {
        if ($this->getRequest()->isPost()) {
            $form = new \Application\Form\CreateContentform('contentForm', array(), $GLOBALS['em']);
            $contentModel = new Model\ContentModel($GLOBALS['em']);
            $post = $this->getRequest()->getPost();
            $entity = new \Application\Entity\Articles;
            $form->bind($entity);
            $form->setData($post);
            if ($form->isValid()) {
                $data = $form->getData();
                $contentModel->save(null, $data);
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

