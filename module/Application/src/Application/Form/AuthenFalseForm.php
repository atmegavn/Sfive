<?php

namespace Application\Form;

use Zend\Form\Form;
use Zend\Form\Element;
use Zend\Form\Fieldset;
use Zend\Stdlib\Hydrator;

class AuthenFalseForm {

    public function getTargetClass() {
        return 'Application\Entity\Articles';
    }

    public function getElementsForPrepare() {
        return array(
            'title' => array(
                'type' => 'Text',
                'name' => 'title',
                'options' => array(
                    'label' => 'Từ chối',
                ),
                'attributes' => array(
                    'id' => 'cr_title',
                    'style' => 'width: 533px',
                    'class' => 'validate[required]'
                )
            )
        );
    }

}

?>
