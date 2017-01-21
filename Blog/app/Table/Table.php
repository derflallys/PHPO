<?php
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 20/01/2017
 * Time: 22:24
 */

namespace app\Table;
use app\App;

/**
 * Class Table
 * @package app\Table
 */
class Table
{
    /**
     * @var
     */
    protected static $table;

    /**
     * @return mixed
     */
    private static function getTable()
    {
        if(static::$table===null)
        {
            $class_name=explode('\\',get_called_class());
            static::$table=strtolower(end($class_name));
        }
            return static::$table;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        // TODO: Implement __get() method.
        $method= 'get'.ucfirst($name);
        $this->$name = $this->$method();
        return $this->$name;
    }


    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return array|mixed
     */
    public static function all()
    {
        return App::getDb()->query('Select * from '. static::getTable() .' ',get_called_class());
    }

    /**
     * @param $id
     * @return array|mixed
     */
    public static function find($id)
    {
       return static::query('SELECT * from '.static::getTable().'  WHERE  id=?',[$id],get_called_class(),true);
    }

    /**
     * @param $stat
     * @param null $att
     * @param bool $one
     * @return array|mixed
     */
    public static function query($stat, $att=null, $one=false)
    {
        if($att)
        {
            return App::getDb()->prepare($stat,$att,get_called_class(),$one);
        }
        else{
            return App::getDb()->query($stat,get_called_class(),$one);
        }


    }
    
}