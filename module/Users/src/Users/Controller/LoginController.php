<?php
namespace Users\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Users\Form\LoginForm;

class LoginController extends AbstractActionController{
    
    public function indexAction(){
        $form = new LoginForm();
        $view = new ViewModel(array('form'=>$form));
        return $view;
    }
    
    public function confirmAction(){
        $view = new ViewModel();
        return $view;
    }
}
?>
