<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace About\Controller;

use Application\Controller\BaseController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class IndexController extends BaseController {

    public function indexAction() {
        $contentModel = new \Application\Model\ContentModel($GLOBALS['em']);
        $data = $contentModel->findAll();
        $title = $data[0]->getTitle();
        $content = $data[1]->getIntrotext();
        //$result = array();
        return new ViewModel(array(
            'title' => $title,
            'content' => $content
        ));
    }

    public function whoweareAction() {
        $title = "Who we are?";
        return new ViewModel(array(
            'title' => $title
        ));
    }

}
