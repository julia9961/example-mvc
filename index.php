<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function __autoload($className)
{
    if (file_exists("router/{$className}.php")) {
        require_once "router/{$className}.php";

    } elseif (file_exists("controllers/{$className}.php")) {
        require_once "controllers/{$className}.php";

    } elseif (file_exists("models/{$className}.php")) {
        require_once "models/{$className}.php";

    }

}
$_POST['button'] = isset($_POST['button']) ? $_POST['button']:null;
$router = new Router();
$router->run();


?>