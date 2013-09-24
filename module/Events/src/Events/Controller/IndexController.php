<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Events\Controller;

use Application\Controller\BaseController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class IndexController extends BaseController {

    public function indexAction() {
        return new ViewModel(array(
            'title' => "Không có bài viết nào trong mục này",
        ));
    }

    public function aboutAction() {
        
    }

    public function whoweareAction() {
        $title = "Who we are?";
        return new ViewModel(array(
            'title' => $title
        ));
    }

}
