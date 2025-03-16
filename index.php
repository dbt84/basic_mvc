<?php
require 'autoload.php'; // Laadt automatisch alle klassen

// Simpele router

$url = isset($_GET['url']) ? explode('/', trim($_GET['url'], '/')) : ['home'];

$controller = ucfirst($url[0]) . 'Controller';
$method = !empty($url[1]) ? $url[1] : 'index';


//echo "Controller: $controller <br>";
//echo "Method: $method <br>";

// Controleer of de controllerklasse bestaat (autoloader regelt het laden)
if (class_exists($controller)) {
    $controllerInstance = new $controller();
    
    if (method_exists($controllerInstance, $method)) {
        //echo "Methode gevonden en aangeroepen!<br>";
        $controllerInstance->$method();
    } else {
        //echo "Methode niet gevonden!<br>";
        require "views/404.php";
    }
} else {
    //echo "Controller niet gevonden!<br>";
    require "views/404.php";
}