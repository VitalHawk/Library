<?php
require_once 'controller.php';

class ControllerLogin extends Controller {
    public function Index($params) {
        $_SESSION['user'] = $params['login'];
        header("Location: /", TRUE, 301);
    }
}
