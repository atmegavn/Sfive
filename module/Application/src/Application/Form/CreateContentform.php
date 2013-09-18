<?php

namespace Application\Form;

use Zend\Form\Form;
use Zend\Form\Element;
use Zend\Form\Fieldset;
use Zend\Stdlib\Hydrator;

class CreateContentform extends Form {

    //put your code here
    public function __construct($name = "postContentForm", $options = array()) {
        parent::__construct($name, $options);
        $this->add(array(
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
        ));
        $this->add(array(
            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'name' => 'menu',
            'options' => array(
                'label' => 'Menu chứa bài viết: ',
                'empty_option' => '----Tất cả----',
                'object_manager' => $GLOBALS['em'],
                'target_class' => 'Application\Entity\TblContentTypes',
                'property' => 'typeTitle'
            ),
            'attributes' => array(
                'id' => 'cr_menuselect',
                'class' => 'validate[required]'
            //'style' => 'width: 99%'
            )
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Textarea',
            'name' => 'intro',
            'options' => array(
                'label' => 'Intro cho bài viết: ',
            ),
            'attributes' => array(
                'id' => 'cr_introtext',
            )
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Textarea',
            'name' => 'content',
            'options' => array(
                'label' => 'Nội dung:',
            ),
            'attributes' => array(
                'id' => 'cr_fulltext',
            )
        ));
    }

}

?>