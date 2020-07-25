<?php
$controllers = array(
    'pages' => ['home', 'error'],
    'posts' => ['index', 'showPost'],
);

$controllers = array(
    'pages' => ['home', 'error']
);
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])){
    $controller = 'pages';
    $action = 'error';
}
include_once ('controllers/base_controller.php');
$klass = str_replace('_','',ucwords($controller,'_')).'Controller';
$controller = new $klass;
$controller->$action();

$controllers = array(
    'pages' => ['home', 'error'],
    'posts' => ['index'], // bổ sung thêm
);

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'pages';
    $action = 'error';
}

include_once('controllers/base_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();