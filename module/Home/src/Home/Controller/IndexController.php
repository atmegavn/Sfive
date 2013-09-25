<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Home\Controller;

use Application\Controller\BaseController;
use Zend\View\Model\ViewModel;

class IndexController extends BaseController {

    public function indexAction() {
        $contentModel = new \Application\Model\ContentModel($GLOBALS['em']);
        $events = $contentModel->findBy(array('menu' => 33), array('idarticles' => 'DESC'), 10); //lay article trong menu: Tin tức sự kiện
        if (sizeof($events) > 0) {
            $headnews = $events[0];
            unset($events[0]);
            $matches = array();
            preg_match('/(<img[^>]+>)/i', $headnews->getContents(), $matches);
            if (sizeof($matches) > 0) {
                $img = $matches[0];
            } else {
                $img = "";
            }
            $result = new ViewModel(array(
                'result' => 'OK',
                'headnews' => $headnews,
                'events' => $events,
                'img' => $img
            ));
        } else {
            $result = new ViewModel(array(
                'result' => 'ERROR',
                'headnews' => '',
                'events' => ''
            ));
        }
        return $result;
    }

}
