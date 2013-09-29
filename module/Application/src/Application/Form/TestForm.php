<?php

namespace Application\Form;

class TestForm extends BaseForm {

    public function getTargetClass() {
        return 'Application\Entity\Register';
    }

    public function getElementsForPrepare() {
        return array(
            'from' => array(
                'type' => 'Text',
                'name' => 'from',
                'options' => array(
                    'label' => 'Bạn biết tới trung tâm từ nguồn tin nào:* ',
                ),
                'attributes' => array(
                    'class' => 'validate[required, maxSize[50]]',
                    'style' => 'width: 300px',
                )
            ),
            'name' => array(
                'type' => 'Text',
                'name' => 'name',
                'options' => array(
                    'label' => 'Họ và Tên:* ',
                ),
                'attributes' => array(
                    'class' => 'validate[required, maxSize[50]]',
                    'style' => 'width: 300px',
                )
            ),
            'phone' => array(
                'type' => 'Text',
                'name' => 'phone',
                'options' => array(
                    'label' => 'Số điện thoại:* ',
                ),
                'attributes' => array(
                    'class' => 'validate[required, custom[phone], maxSize[50]]',
                    'style' => 'width: 300px',
                )
            ),
            'school' => array(
                'type' => 'Text',
                'name' => 'school',
                'options' => array(
                    'label' => 'Trường bạn đang học: ',
                ),
                'attributes' => array(
                    'style' => 'width: 300px',
                    'class' => 'validate[maxSize[90]]',
                )
            ),
            'class' => array(
                'type' => 'Text',
                'name' => 'class',
                'options' => array(
                    'label' => 'Khóa học bạn muốn kiểm tra:* ',
                ),
                'attributes' => array(
                    'class' => 'validate[required,maxSize[90]]',
                    'style' => 'width: 300px',
                )
            ),
            'email' => array(
                'type' => 'Text',
                'name' => 'email',
                'options' => array(
                    'label' => 'Email: ',
                ),
                'attributes' => array(
                    'class' => 'validate[custom[email],maxSize[90]]',
                    'style' => 'width: 300px',
                )
            )
        );
    }

}

?>
