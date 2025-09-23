<?php
require_once "./app/config/connection.php";

$controller = $_GET['controller'] ?? 'Produto';
$action     = $_GET['action'] ?? 'index';

// Nome da classe e caminho do arquivo
$controllerName = ucfirst($controller) . "Controller";
$controllerFile = "app/controllers/$controllerName.php";

// Verifica se existe
if (file_exists($controllerFile)) {
    require $controllerFile;
    $controllerObj = new $controllerName();

    if (method_exists($controllerObj, $action)) {
        $controllerObj->$action();
    } else {
        echo "Ação '$action' não encontrada no controller '$controllerName'";
    }
} else {
    echo "Controller '$controllerName' não encontrado!";
}
