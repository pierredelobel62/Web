<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'Autoloader.php';

Autoloader::autoload();

$router = new Core\Router();

try {
    $router->run();
} catch (Exception $e) {
    echo $e->getMessage();
}



