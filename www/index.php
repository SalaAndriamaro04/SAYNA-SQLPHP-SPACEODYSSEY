<?php

include('../include.php');
//mannuel
//$controller = new app\Controllers\PaysController();
//$view = $controller->index();

/*Automatiser
$controllerName = 'app\\Controllers\\'.$_GET['controller'].'Controller';
$actionName = $_GET['action'];

link + /?controller=pays&action=index
$controller = new $controllerName();
$view = $controller->$actionName();
$view->display();*/
Kernel\Connexion::get();
include('../app/views/index.php');
?>