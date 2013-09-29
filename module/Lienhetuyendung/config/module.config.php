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
            'lienhetuyendung' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/lienhetuyendung/[:controller[/:action][/:id]]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Lienhetuyendung\Controller',
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
            'Lienhetuyendung\Controller\Index' => 'Lienhetuyendung\Controller\IndexController',
//            'Lienhetuyendung\Controller\Camnghihocvien' => 'Lienhetuyendung\Controller\CamnghihocvienController',
//            'Lienhetuyendung\Controller\Thanhtichxuatsac' => 'Lienhetuyendung\Controller\ThanhtichxuatsacController',
//            'Lienhetuyendung\Controller\Gocthugian' => 'Lienhetuyendung\Controller\GocthugianController',
//            'Lienhetuyendung\Controller\Gallery' => 'Lienhetuyendung\Controller\GalleryController',
            ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
//            'lienhetuyendung/about/index' => __DIR__ . '/../view/lienhetuyendung/about/index.phtml',
//            'lienhetuyendung/whychoosesfive/index' => __DIR__ . '/../view/lienhetuyendung/whychoosesfive/index.phtml',
//            'lienhetuyendung/camnghihocvien/index' => __DIR__ . '/../view/gochocvien/camnghihocvien/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);
