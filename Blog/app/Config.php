<?php
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 21/01/2017
 * Time: 20:41
 */

namespace app;


class Config
{
    private $settings = [];
    private static $_instance;

    private function __construct()
    {

        $this->settings=require  dirname(__DIR__).'/config/config.php';
    }

    public static function getInstance()
    {
        if (self::$_instance==null)
        {
            self::$_instance=new Config();
        }
        return self::$_instance;
    }

    public function get($key)
    {
        if (isset($this->settings['$key']))
            return $this->settings['$key'];
        return null;

    }
}