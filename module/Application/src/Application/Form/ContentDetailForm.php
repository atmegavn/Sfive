<?php

namespace Application\Form;

use Zend\Form\Form;
use Zend\Form\Element;
use Zend\Form\Fieldset;
use Zend\Stdlib\Hydrator;

class ContentDetailForm extends BaseForm {

    public function getTargetClass() {
        return 'Application\Entity\Articles';
    }

    public function getElementsForPrepare() {
        $parent_criteria = array(
            'parent' => -1
        );

        $parent = $this->getValueOptions($parent_criteria, 'Application\Entity\Menu');
        $items_parent[''] = "Tất cả";
        if (sizeof($parent) > 0) {
            foreach ($parent as $index) {
                $items_parent[$index->getIdmenu()] = $index->getName();
            }
        }
        return array(
            'idarticles' => array(
                'type' => 'Text',
                'name' => 'idarticles',
                'attributes' => array(
                    'hidden' => 'true',
                )
            ),
            'title' => array(
                'type' => 'Text',
                'name' => 'title',
                'options' => array(
                    'label' => 'Tên bài viết: ',
                ),
                'attributes' => array(
                    'id' => 'cr_title',
                    'style' => 'width: 533px',
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
            'parent_menu' => array(
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'parent_menu',
                'options' => array(
                    'label' => 'Menu cha ',
                    'options' => $items_parent,
                    'empty_option' => '----Tất cả----',
                ),
                'attributes' => array(
                    'id' => 'cr_menu_parent',
                    'onchange' => 'postAction.parentMenuChange()'
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

}

?>
