<?php
require_once "connection.php";
if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
    if (isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = 'index';
    }
}  else{
    $controller = 'page';
    $action = 'home';
}
require_once ('routes.php');