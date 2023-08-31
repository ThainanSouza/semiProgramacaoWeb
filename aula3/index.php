<?php

const FOLDER = 'aula3';

if (isset($_GET['controller']) && isset($_GET['acao'])) {
    $controller = $_GET['controller'];
    $metodo = $_GET['acao'];
    $controller .= 'Controller';

    

    require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/controller/' . $controller . '.php';

    $estudanteController = new $controller();
    $estudanteController->$metodo();
} else{
    require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/home.php';
}