<?php

class UserController {
    
    public function index() {
        $userModel = new User();
        $users = $userModel->getAllUsers();
        require 'views/users/allusers.php';
    }
    public function add() {
        $melding = "";
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userModel = new User();
            $melding = "Gebruiker is toegevoegd!";
            $_POST = NULL;
        }
        require "views/users/adduser.php";
    }
    public function blabla() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userModel = new User();
            $userModel->addUser($_POST);
            $_POST = NULL;
        }
        require "views/users/adduser.php";
    }
    
}
