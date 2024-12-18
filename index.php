<?php
require 'Database.php';

// Simpele router
$url = isset($_GET['url']) ? explode('/', $_GET['url']) : ['home'];

$controller = ucfirst($url[0]) . 'Controller';
$method = $url[1] ?? 'index';

// Laad de controller
if (file_exists("controllers/$controller.php")) {
    require "controllers/$controller.php";
    $controllerInstance = new $controller();

    if (method_exists($controllerInstance, $method)) {
        $controllerInstance->$method();
    } else {
        echo "Methode niet gevonden.";
    }
} else {
    echo "Controller niet gevonden.";
}
