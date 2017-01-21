<?php
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 17/01/2017
 * Time: 19:19
 */

namespace app;


class App
{
    private static $_database;
    private static $title="Mon Blog";

    public static function getDb()
    {
        if (self::$_database==null)
        {
            self::$_database=new App();
        }
        return self::$_database;
    }

    public static function notFound()
    {
        header('HTTP/1.0 404 Not Found');
        header('Location:index.php?p=404');
    }

    public static function getTitle()
    {
        return self::$title;
    }

    public static function setTitle($title)
    {
        self::$title=$title.'|'.self::$title;
    }
}