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
use Zend\View\Model\JsonModel;

class IndexController extends BaseController {

    public function indexAction() {
        return new ViewModel();
    }

    public function eventsAction() {
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
            $result->setTerminal(true);
        } else {
            $result = new ViewModel(array(
                'result' => 'ERROR',
                'headnews' => '',
                'events' => ''
            ));
            $result->setTerminal(true);
        }
        return $result;
    }

    public function learnexpAction() {
        $contentModel = new \Application\Model\ContentModel($GLOBALS['em']);
        $events = $contentModel->findBy(array('menu' => 36), array('idarticles' => 'DESC'), 10); //lay article trong menu: Tin tức sự kiện
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
            $result->setTerminal(true);
        } else {
            $result = new ViewModel(array(
                'result' => 'ERROR',
                'headnews' => '',
                'events' => ''
            ));
            $result->setTerminal(true);
        }
        return $result;
    }

    public function societyAction() {
        $contentModel = new \Application\Model\ContentModel($GLOBALS['em']);
        $events = $contentModel->findBy(array('menu' => 35), array('idarticles' => 'DESC'), 10); //lay article trong menu: Tin tức sự kiện
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
            $result->setTerminal(true);
        } else {
            $result = new ViewModel(array(
                'result' => 'ERROR',
                'headnews' => '',
                'events' => ''
            ));
            $result->setTerminal(true);
        }
        return $result;
    }

    public function scholarshipAction() {
        $contentModel = new \Application\Model\ContentModel($GLOBALS['em']);
        $events = $contentModel->findBy(array('menu' => 34), array('idarticles' => 'DESC'), 10); //lay article trong menu: Tin tức sự kiện
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
            $result->setTerminal(true);
        } else {
            $result = new ViewModel(array(
                'result' => 'ERROR',
                'headnews' => '',
                'events' => ''
            ));
            $result->setTerminal(true);
        }
        return $result;
    }

    public function checkpopupAction() {
        if ($GLOBALS['popup'] == 'on') {
            $result = array('result' => 'on');
        } else {
            $result = array('result' => 'off');
        }
        return new JsonModel($result);
    }

}
