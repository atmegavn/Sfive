<?php

namespace Application\Form;

class ContentfilterForm extends BaseForm {

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
            'title' => array(
                'type' => 'Text',
                'name' => 'title',
                'options' => array(
                    'label' => 'Tên bài viết: ',
                ),
                'attributes' => array(
                    'id' => 'cr_title',
                    'style' => 'width: 433px',
                    'class' => 'validate[required]',
                    'type' => 'search'
                )
            ),
            'menu' => array(
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'menu',
                'options' => array(
                    'label' => 'Box chứa bài viết: ',
                    'empty_option' => '----Tất cả----',
                    'object_manager' => $GLOBALS['em'],
                    'target_class' => 'Application\Entity\Menu',
                    'property' => 'name'
                ),
                'attributes' => array(
                    'id' => 'cr_menu_son',
                    'class' => 'validate[required]',
                    'onchange' => 'postAction.btnSearchClick()'
                )
            ),
            'parent_menu' => array(
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'parent_menu',
                'options' => array(
                    'label' => 'Box cha ',
                    'options' => $items_parent,
                    'empty_option' => '----Tất cả----',
                //'object_manager' => $GLOBALS['em'],
                //'target_class' => 'Application\Entity\Menu',
                //'property' => 'name'
                ),
                'attributes' => array(
                    'id' => 'cr_menu_parent',
                    //'class' => 'validate[required]',
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
