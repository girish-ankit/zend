<?php

namespace Users\Form;

use Zend\InputFilter\InputFilter;

class RegisterFilter extends InputFilter {

    function __construct() {
        
        $this->add(array(
            'name' => 'email',
            'requried' => TRUE,
            'validators' => array(array('name' => 'EmailAddress', 'options' => array('domain' => true,))),
        ));
        
        $this->add(array(
            'name'=> 'name',
            'requried'=> true,
            'filters'=> array(array('name'=>'StripTags',)),
            'validators'=> array(array('name'=>'StringLength', 'options'=> array('encoding'=>'UTF-8', 'min'=>5, 'max'=>14))),
        ));
        
        $this->add(array(
            'name'=>'password1',
            'requried'=>true,
        ));
        
        $this->add(array(
            'name'=>'confirm_password1',
            'requried'=>true,
        ));
    }

}

?>
