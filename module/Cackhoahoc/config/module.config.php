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
            'cackhoahoc' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/cackhoahoc/[:controller[/:action][/:id]]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Cackhoahoc\Controller',
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
            'Cackhoahoc\Controller\Index' => 'Cackhoahoc\Controller\IndexController',
            'Cackhoahoc\Controller\Tienganhgiaotiep' => 'Cackhoahoc\Controller\TienganhgiaotiepController',
            'Cackhoahoc\Controller\Tienganhthuongmai' => 'Cackhoahoc\Controller\TienganhthuongmaiController',
            'Cackhoahoc\Controller\Nguphaptienganh' => 'Cackhoahoc\Controller\NguphaptienganhController',
            'Cackhoahoc\Controller\Luyenthitoeic' => 'Cackhoahoc\Controller\LuyenthitoeicController',
            'Cackhoahoc\Controller\Luyenthiielts' => 'Cackhoahoc\Controller\LuyenthiieltsController',
            'Cackhoahoc\Controller\Tienganhtheoyeucau' => 'Cackhoahoc\Controller\TienganhtheoyeucauController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);
