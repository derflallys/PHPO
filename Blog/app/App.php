<?php
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 17/01/2017
 * Time: 19:19
 */



use core\Database\MysqlDatabase;
use core;

class App
{
    //On peut dire que c'est une methode Factory
    private static $_instance;
    private static $title="Mon Blog";
    private static $db_instance;

    public static function getInstance()
    {
        if (self::$_instance==null)
        {
            self::$_instance=new App();
        }
        return self::$_instance;
    }

    public static function notFound()
    {
        header('HTTP/1.0 404 Not Found');
        header('Location:index.php?p=404');
    }
    //Factory Pour la Table
    public function getTable($name)
    {
        $class_name= "app\\Table\\".ucfirst($name).'Table';
        return new $class_name($this->getDb());
    }
    //Factory pour Database
    public function getDb()
    {
        $config = Config::getInstance();
        if(is_null(self::$db_instance))
        {
            self::$db_instance= new MysqlDatabase($config->get("db_name"),$config->get("db_user"),$config->get("db_pass"),$config->get("db_host"));
        }
        return self::$db_instance;
    }

    public static function load()
    {
        session_start();
        require '../core/Autoloader.php';
        core\Autoloader::register();
    }


}