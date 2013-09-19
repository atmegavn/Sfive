<?php

namespace Application\Form;

use Zend\Form;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory as InputFactory;


abstract class BaseForm extends Form\Form {

    //put your code here
    public $em, $xfactory, $inputFilter;

    public function __construct($name, array $options, $em = null) {
        parent::__construct($name, $options);

        $this->em = $GLOBALS["em"];

        $this->inputFilter = new InputFilter();
        $this->xfactory = new InputFactory();
        $targetClass = $this->getTargetClass();
        $hydrat = new \DoctrineORMModule\Stdlib\Hydrator\DoctrineEntity($GLOBALS["em"],$targetClass);
        $this->setHydrator($hydrat);
//        $this->prepare();

        $this->setInputFilter($this->inputFilter);

        $this->setAttributes(array(
            'class' => 'ajax detail_form'
        ));

        $elements = $this->getElementsForPrepare();

        if (array_key_exists("filter", $options)) {
            foreach ($options["filter"] as $name) {
                if (array_key_exists($name, $elements)) {
                    $this->add($elements[$name]);
                }
            }
        } else {
            foreach ($elements as $element) {
                $this->add($element);
            }
        }

//        if (array_key_exists("filter", $options) && true == $options["filter"] ) {
//            foreach ($this>getElements() as $element) {
//                $element->setAttributes(array(
//                    'disabled' => true
//                ));
//            }
//        }
        //parent::prepare();
    }

    public function add($elementOrFieldset, array $flags = array()) {

        parent::add($elementOrFieldset, $flags);

        if (!is_object($elementOrFieldset)) {
            if (isset($elementOrFieldset['validators']) || isset($elementOrFieldset['filters'])
            ) {
                if (isset($elementOrFieldset['type'])) {
                    unset($elementOrFieldset['type']);
                }
                if (isset($elementOrFieldset['options'])) {
                    unset($elementOrFieldset['options']);
                }
                $this->inputFilter->add($this->xfactory->createInput($elementOrFieldset));
            }
        }
        return $this;
    }

    public function addAll($elementOrFieldsets, array $flags = array()) {
        foreach ($elementOrFieldsets as $elementOrFieldset) {
            $this->add($elementOrFieldset, $flags);
        }
        return $this;
    }

    public function remove($name) {
        parent::remove($name);
        if ($this->inputFilter->has($name)) {
            $this->inputFilter->remove($name);
        }
        return $this;
    }

    public function filter(array $array) {
        $elements = $this->getElements();
        foreach ($elements as $element) {
            $name = $element->getName();
            if (!in_array($name, $array)) {
                $this->remove($name);
            }
        }
        return $this;
    }

    public function disable() {
        foreach ($this->getElements() as $element) {
            $element->setAttributes(array(
                'disabled' => true
            ));
        }
        return $this;
    }

    public function enable() {
        foreach ($this->getElements() as $element) {
            $element->setAttributes(array(
                'disabled' => false
            ));
        }
        return $this;
    }

//    public function getMessages() {
//        $message = parent::getMessages();
//        $messageArray = array();
//        $messageEmpty = array();
//        if (empty($message)) {
//            $messageArray['type'] = 'success';
//        } else {
//            $messageArray['type'] = 'error';
//        }
//
//        if ($message) {
//            foreach ($message as $key => $value) {
//                $messageString = '';
//                foreach ($value as $key1 => $value1) {
//                    $messageString = $messageString . $value1 . '.';
//                }
//                $messageArray[$key] = $messageString;
//                $messageEmpty[$key] = array();
//            }
//        }
//        $this->setMessages($messageEmpty);
//        return json_encode($messageArray);
//    }
    public function getFormXFactory() {
        return $this->xfactory;
    }

}

