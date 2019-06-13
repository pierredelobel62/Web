<?php 

namespace Controller;

use Core\Controller\ControllerInterface;
use Core\Mysql;

class IndexController implements ControllerInterface
{
    public function __construct()
    {
    }

    public function execute()
    {
        // $pdo = Mysql::getConnection();
        include_once 'app/View/index.php';
    }
}
