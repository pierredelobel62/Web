<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
class Autoloader
{
    static function autoload() 
    {
        spl_autoload_register( array(__CLASS__, 'loadApp') );
        spl_autoload_register( array(__CLASS__, 'loadCore') );
    }

    static function loadApp ($class)
    {

        $filepath = 'app/' . str_replace('\\', '/', $class) .'.php';

        if (file_exists($filepath)) {
            require_once $filepath;
        }
    }

    static function loadCore($class)
    {

        $filepath = str_replace('\\', '/', $class) .'.php';

        if (file_exists($filepath)) {
            require_once $filepath;
        }
    }
}