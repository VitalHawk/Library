<?php
require_once 'controller.php';
require_once DIR_BASE . 'user.php';

class ControllerLogin extends Controller {
    public function Index($params) {
        if (isset($params['login']) &&
                ($user = User::Login($params['login'], $params['password']))) {
            $_SESSION['user'] = $user;
        }
        else {
            unset($_SESSION['user']);
        }
        header('Location: ' . (isset($params['uri']) ? $params['uri'] : '/'), TRUE, 307);
    }
    
    public function RegisterForm($params) {
        if (isset($params['login'])) {
            $user = User::Load($params['login']);
        }
        else {
            $user = NULL;
        }
        $this->view->Show('user_register.tpl', array('user' => $user));
    }
    
    public function Register($params) {
        $user = User::Load($params['login']);
        $saved = false;
        if ($user) {
            $user->Set($params);
            $saved = $user->Save();
        }
        else {
            $user = User::Add($params);
            if ($user) {
                $saved = true;
            }
        }
        if ($saved) {
            header('Location: /Login/UserView/login/' . $user->login, TRUE, 307);
        }
        else {
            header('Location: /Login/RegisterForm/', TRUE, 307);        
        }
    }
    
}
