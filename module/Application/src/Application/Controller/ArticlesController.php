<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Application\Controller\BaseController;
use Application\Model;

class ArticlesController extends BaseController {

    public function getModel() {
        return new Model\ContentModel($GLOBALS['em']);
    }

    //put your code here
    public function indexAction() {
        $key = $this->getRequest()->getQuery('authkey');
        if ($key == $GLOBALS['key']) {
            $content = new \Application\Form\ContentfilterForm('contentForm', array(), $GLOBALS['em']);
            $viewModel = new ViewModel(array(
                'form' => $content
            ));
            return $viewModel;
        } else {
            return new JsonModel(array('result' => 'Authenticate false'));
        }
    }

    public function listAction() {
        $contentModel = $this->getModel();
        $cmd = $this->getRequest()->getPost('cmd');
        $title = $this->getRequest()->getPost('title');
        $type = $this->getRequest()->getPost('type');
        $db = $contentModel->getQueryBuilder();
        $db->addOrderBy('Articles.idarticles', 'DESC');
        switch ($cmd) {
            //load đề tài của current userr
            case 0:
                break;
            //nút tìm kiếm
            case 1:
                $db->andWhere("Articles.title like '%" . $title . "%'");
                if ($type != null) {
                    $db->andWhere("Articles.menu= " . $type);
                }
                break;
        }
        $items = array();
        $data = $contentModel->getQueryResult();
        foreach ($data as $idata) {
            $item['id'] = $idata->getIdarticles();
            $item['title'] = $idata->getTitle();
            $item['menu'] = $idata->getMenu()->getName();
            $item['introText'] = strip_tags($idata->getSummary());
//            $item['fullText'] = strip_tags($idata->getFulltext());
            $items[] = $item;
        }
        $result = array('Result' => 'OK', 'Records' => $items);
        $json = new JsonModel($result);
        return $json;
    }

    public function createAction() {
        $key = $this->getRequest()->getQuery('authkey');
        if ($key == $GLOBALS['key']) {
            $content = new \Application\Form\CreateContentform('contentForm', array(), $GLOBALS['em']);
            $viewModel = new ViewModel(array(
                'crform' => $content
            ));
            return $viewModel;
        } else {
            return new JsonModel(array('result' => 'ERROR'));
        }
    }

    public function addAction() {
        if ($this->getRequest()->isPost()) {
            $form = new \Application\Form\ContentForm('contentForm', array(), $GLOBALS['em']);
            $contentModel = $this->getModel();
            $post = $this->getRequest()->getPost();
            $matches = array();
            preg_match('/(<img[^>]+>)/i', $post['contents'], $matches);
            if (sizeof($matches) > 0) {
                $img = $matches[0];
            } else {
                $img = "";
            }
            $entity = new \Application\Entity\Articles;
            $entity->setImgLink($img);
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

    public function editAction() {
        $key = $this->getRequest()->getQuery('authkey');
        $id = $this->getRequest()->getQuery('id');
        if ($key == $GLOBALS['key']) {
            $content = new \Application\Form\ContentDetailForm('contentForm', array(), $GLOBALS['em']);
            $contentModel = $this->getModel();
            $entity = $contentModel->find($id);
            $content->bind($entity);
            $viewModel = new ViewModel(array(
                'crform' => $content
            ));
            return $viewModel;
        } else {
            return new JsonModel(array('result' => 'ERROR'));
        }
    }

    //cập nhật vào DB 
    public function updateAction() {
        if ($this->getRequest()->isPost()) {
            $form = new \Application\Form\ContentForm('contentForm', array(), $GLOBALS['em']);
            $contentModel = $this->getModel();
            $post = $this->getRequest()->getPost();
            $matches = array();
            preg_match('/(<img[^>]+>)/i', $post['contents'], $matches);
            if (sizeof($matches) > 0) {
                $img = $matches[0];
            } else {
                $img = "";
            }
            $id = $post['idarticles'];
            $entity = $contentModel->find($id);
            $entity->setImgLink($img);
            $form->bind($entity);
            $form->setData($post);
            if ($form->isValid()) {
                $data = $form->getData();
                $contentModel->save($id, $data);
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

    public function deleteAction() {
        $id = $this->getRequest()->getPost('id');
        $model = $this->getModel();
        $model->delete($id);
        $result = array('result' => 'OK');
        return new JsonModel($result);
    }

    public function menuChangeAction() {
        $pid = $this->getRequest()->getPost('parent_menu');
        $menuModel = new \Application\Model\MenuModel($GLOBALS['em']);
        if ($pid == '') {
            $menu = $menuModel->findAll();
        } else {
            $menu = $menuModel->findBy(array('parent' => $pid));
        }
        $parent = $menuModel->find($pid);
        $items = array();
        if (sizeof($menu) > 0) {
            foreach ($menu as $imenu) {
                $items[$imenu->getIdmenu()] = $imenu->getName();
            }
        } else {
            $items[$parent->getIdmenu()] = $parent->getName();
        }
        $result = array('result' => 'OK', 'data' => $items);
        return new JsonModel($result);
    }

    public function getfistAction() {
        $contentModel = new \Application\Model\ContentModel($GLOBALS['em']);
        $data = $contentModel->findBy(array('menu' => 33), array('idarticles' => 'DESC')); //lay article đầu tiên trong box sự kiện
        if (sizeof($data) > 0) {
            $id = $data[0]->getIdarticles();
            $title = $data[0]->getTitle();
            $result = array('result' => 'OK', 'title' => $title, 'id' => $id);
        } else {
            $result = array('result' => 'ERROR', 'title' => '', 'id' => -1);
        }
        return new JsonModel($result);
    }

    public function getmoreAction() {
        $mid = $this->getRequest()->getPost('id');
        $contentModel = new \Application\Model\ContentModel($GLOBALS['em']);
        $data = $contentModel->findBy(array('menu' => 33), array('idarticles' => 'DESC')); //lay article đầu tiên trong box sự kiện
        if (sizeof($data) > 0) {
            foreach ($data as $ar) {
                if ($ar->getIdarticles() < $mid) {
                    $id = $ar->getIdarticles();
                    $title = $ar->getTitle();
                    $result = array('result' => 'OK', 'title' => $title, 'id' => $id);
                } else {
                    $id = $data[0]->getIdarticles();
                    $title = $data[0]->getTitle();
                    $result = array('result' => 'OK', 'title' => $title, 'id' => $id);
                }
            }
        } else {
            $result = array('result' => 'ERROR', 'title' => '', 'id' => $mid);
        }
        return new JsonModel($result);
    }

}

