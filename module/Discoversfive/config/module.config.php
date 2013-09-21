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
            'discoversfive' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/discoversfive/[:controller[/:action][/:id]]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Discoversfive\Controller',
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
            'Discoversfive\Controller\Index' => 'Discoversfive\Controller\IndexController',
            'Discoversfive\Controller\About' => 'Discoversfive\Controller\AboutController',
            'Discoversfive\Controller\Whychoosesfive' => 'Discoversfive\Controller\WhychoosesfiveController',
            'Discoversfive\Controller\Teachers' => 'Discoversfive\Controller\TeachersController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'discoversfive/about/index' => __DIR__ . '/../view/discoversfive/about/index.phtml',
            'discoversfive/whychoosesfive/index' => __DIR__ . '/../view/discoversfive/whychoosesfive/index.phtml',
            'discoversfive/teachers/index' => __DIR__ . '/../view/discoversfive/teachers/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);
