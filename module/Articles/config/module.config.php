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
            'articles' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/articles/[:controller[/:action][/:id]]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Articles\Controller',
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
            'Articles\Controller\Index' => 'Articles\Controller\IndexController',
            'Articles\Controller\Detail' => 'Articles\Controller\DetailController',
//            'Articles\Controller\Whychoosesfive' => 'Articles\Controller\WhychoosesfiveController',
//            'Articles\Controller\Teachers' => 'Articles\Controller\TeachersController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
        //'articles/index/index' => __DIR__ . '/../view/articles/index/index.phtml',
        //'articles/whychoosesfive/index' => __DIR__ . '/../view/articles/whychoosesfive/index.phtml',
        //'articles/teachers/index' => __DIR__ . '/../view/articles/teachers/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);
