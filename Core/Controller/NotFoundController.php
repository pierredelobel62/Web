<?php

namespace Core\Controller;

use Core\Exception\NotFoundException;
use Core\Controller\ControllerInterface;

class NotFoundController implements ControllerInterface{
    
    public function __construct()
    {
    }

    public function execute()
    {
        throw new NotFoundException($_GET['url']);
    }
}