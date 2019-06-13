<?php

namespace Core;

use Core\Controller\NotFoundController;

class Router
{

    private $url;

    public function __construct()
    {
        $this->url = 'index';
    }

    public function run(){

        if (!empty($_GET['url'])) {
            $this->url = $_GET['url'];
        } 
        
        $class = '\\Controller\\'.ucfirst(str_replace('/', '\\', $this->url)).'Controller';
        
        if (!class_exists($class)) {
            $controller = new NotFoundController();
        } else {
            $controller = new $class();
        }
        $controller->execute();

    }

}
