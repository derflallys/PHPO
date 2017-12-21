<?php

/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 21/01/2017
 * Time: 22:35
 */
class CarFactory
{
    public static function getCar($type)
    {
        $type =ucfirst($type);
        $class_name="Car".$type;
        return new $class_name();
    }
}