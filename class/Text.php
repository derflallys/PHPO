<?php

/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 12/01/2017
 * Time: 21:10
 */
class text
{

    private static $suffix=" €";
    const SUFFIX=" €";
    public static function WithZero ($chif)
    {
        if($chif<10)
        {
            return '0'.$chif .self::$suffix;
        }
        return $chif .self::$suffix;
    }
}