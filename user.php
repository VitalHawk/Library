<?php

require_once 'conn.php';

class User {
    public $id, $login, $name, $surname, $isAdmin;
    public static function Login($login, $pass) {
        $conn = getConn();
        
        $q = "Select id, name, surname, isAdmin From Users Where login=? And password=md5(?)";
        $stmt = $conn->prepare($q);
        $stmt->bind_param('ss', $login, $pass);
        //echo $q . ' ' . $login . ' ' . $pass;
        if ($stmt->execute() && ($res = $stmt->get_result()) && $row = $res->fetch_row()) {
            $user = new User();
            $user->id = $row[0];
            $user->name = $row[1];
            $user->surname = $row[2];
            $user->isAdmin = $row[3];
            $user->login = $login;
            return $user;
        }
    }
    public function __toString()
    {
        return $this->name;
    }
}

function user_admin() {
    return (isset($_SESSION['user']) && $_SESSION['user']->isAdmin);
}