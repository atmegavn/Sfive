<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
return array(
    'router' => array(
        'routes' => array(
            'gochocvien' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/gochocvien/[:controller[/:action][/:id]]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Gochocvien\Controller',
                        'controller' => 'Index',
                        'action' => 'index',
                    ),
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                ),
                'may_terminate' => true,
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Gochocvien\Controller\Index' => 'Gochocvien\Controller\IndexController',
            'Gochocvien\Controller\Camnghihocvien' => 'Gochocvien\Controller\CamnghihocvienController',
            'Gochocvien\Controller\Thanhtichxuatsac' => 'Gochocvien\Controller\ThanhtichxuatsacController',
            'Gochocvien\Controller\Gocthugian' => 'Gochocvien\Controller\GocthugianController',
            'Gochocvien\Controller\Gallery' => 'Gochocvien\Controller\GalleryController',
            ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
//            'gochocvien/about/index' => __DIR__ . '/../view/gochocvien/about/index.phtml',
//            'gochocvien/whychoosesfive/index' => __DIR__ . '/../view/gochocvien/whychoosesfive/index.phtml',
//            'gochocvien/camnghihocvien/index' => __DIR__ . '/../view/gochocvien/camnghihocvien/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);
