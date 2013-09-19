<?php

namespace Application\Form;

use Zend\Form\Form;
use Zend\Form\Element;
use Zend\Form\Fieldset;
use Zend\Stdlib\Hydrator;

class CreateContentform extends BaseForm {

    public function getElementsForPrepare() {
        return array(
            'title' => array(
                'type' => 'Text',
                'name' => 'title',
                'options' => array(
                    'label' => 'Tên bài viết: ',
                ),
                'attributes' => array(
                    'id' => 'cr_title',
                    'style' => 'width: 733px',
                    'class' => 'validate[required]'
                )
            ),
            'menu' => array(
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'menu',
                'options' => array(
                    'label' => 'Menu chứa bài viết: ',
                    'empty_option' => '----Tất cả----',
                    'object_manager' => $GLOBALS['em'],
                    'target_class' => 'Application\Entity\Menu',
                    'property' => 'name'
                ),
                'attributes' => array(
                    'id' => 'cr_menuselect',
                    'class' => 'validate[required]'
                )
            ),
            'summary' => array(
                'type' => 'Zend\Form\Element\Textarea',
                'name' => 'summary',
                'options' => array(
                    'label' => 'Intro cho bài viết: ',
                ),
                'attributes' => array(
                    'id' => 'cr_introtext',
                )
            ),
            'contents' => array(
                'type' => 'Zend\Form\Element\Textarea',
                'name' => 'contents',
                'options' => array(
                    'label' => 'Nội dung:',
                ),
                'attributes' => array(
                    'id' => 'cr_fulltext',
                )
            )
        );
    }
    
    public function getTargetClass(){
        return 'Application\Entity\Articles';
    }
}

?>
