<?php

namespace Core;

class Mysql
{
    private static $instance = null;
    private $pdo = null;

    public function __construct()
    {
        $config = parse_ini_file('config/dbconfig.ini');
        $dsn = 'mysql:host='.$config['hostname'].';dbname='.$config['database'].';charset=utf8mb4';
        try {
            $this->pdo = new \PDO($dsn, $config['username'], $config['password']);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Mysql();
        }
        return self::$instance;
    }
    
    public static function getConnection()
    {
        return self::getInstance()->pdo;
    }
}