<?php

namespace Users\Form;

use Zend\Form\Form;

class RegisterForm extends Form {

    public function __construct($name = null) {

        parent::__construct('Register');

        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype', 'multipart/form-data');

        $this->add(array(
            'name' => 'name',
            'options' => array('label' => 'Full Name'),
            'attributes' => array('type' => 'text', 'class' => 'text', 'id' => 'full-name-is', 'value' => 'Enter you full name'),
        ));

        $this->add(array(
            'name' => 'email',
            'options' => array('label' => 'Email'),
            'attributes' => array('type' => 'email', 'required' => 'required'),
            'filters' => array(array('name' => 'StringTrim')),
            //'validators' => array(array('name' => 'EmailAddress', 'message' => array(\Zend\Validator\EmailAddress::INVALID_FORMAT => 'Email address format is invalid'))),
        ));

        $this->add(array(
            'name' => 'password1',
            'options' => array('label' => 'Password'),
            'arrtibutes' => array('type' => 'password'),
        ));

        $this->add(array(
            'name' => 'confirm_password1',
            'options' => array('label' => 'Confirm Password'),
            'arrtibutes' => array('type' => 'confirm_password'),
        ));

        $this->add(array(
            'name' => 'submit1',
            'attributes' => array('type' => 'submit', 'value' => 'Register', 'id' => 'testid', 'class' => 'testclass',),
        ));
    }

}

?>
