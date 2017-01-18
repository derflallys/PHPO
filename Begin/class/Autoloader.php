<?php
namespace Tutoriel;
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 13/01/2017
 * Time: 01:29
 */
class Autoloader
{

    static function autoload ($class) {
        if(strpos($class,__NAMESPACE__.'\\')==0)
        {
            $class=str_replace(__NAMESPACE__.'\\','',$class);
            $class=str_replace('\\','/',$class);
            require 'class/'.$class.'.php';
        }

    }
     static function register()
     {
         spl_autoload_register(array(__CLASS__,"autoload"));
     }
}