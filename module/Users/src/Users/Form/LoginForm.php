<?php

namespace Users\Form;

use Zend\Form\Form;

class LoginForm extends Form {

    public function __construct($name = null) {

        parent::__construct('Login');

        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype', 'multipart/form-data');

        $this->add(array(
            'name' => 'email',
            'options' => array('label' => 'Email'),
            'attributes' => array('type' => 'email', 'class' => 'myclass', 'id' => 'my-id', 'value' => 'Enter you email address'),
        ));
        $this->add(array(
            'name' => 'password',
            'options' => array('label' => 'Password'),
            'attributes' => array('type' => 'password'),
        ));
        $this->add(array(
            'name' => 'submit',
            'attributes' => array('type' => 'submit', 'value' => 'Push this button'),
        ));
    }

}

?>
