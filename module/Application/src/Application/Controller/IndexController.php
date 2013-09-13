<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Controller\BaseController;
use Application\Model\MenuModel;

class IndexController extends BaseController {

    public function initMenu() {
        $model = new MenuModel($GLOBALS['em']);
        return $model->findAll();
    }

    public function indexAction() {
        return new ViewModel(array(
            'title' => 'Chức năng đăng phát triển, vui lòng quay lại sau'
        ));
    }

}
