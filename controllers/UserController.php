<?php

class UserController {
    
    public function index() {
        $userModel = new User();
        $users = $userModel->getAllUsers();
        require 'views/users/allusers.php';
    }
    public function add() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userModel = new User();
            $userModel->addUser($_POST);
            $_POST = NULL;
        }
        require "views/users/adduser.php";
    }
    
}
