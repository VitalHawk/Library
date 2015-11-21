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
}
