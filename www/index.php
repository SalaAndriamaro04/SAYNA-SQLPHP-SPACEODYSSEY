<?php

include('../include.php');

var_dump(app\Models\Missions::all());
//var_dump(app\Models\Vaisseaux::find(1));
//var_dump(app\Models\Planetes::find(1));
//var_dump(app\Models\Astronautes::find(2));
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


?>