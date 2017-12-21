<?php
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 20/01/2017
 * Time: 22:24
 */

namespace core\Table;
use core\Database\Database;

/**
 * Class Table
 * @package core\Table
 */
class Table
{
    protected  $table;
    protected $db;

    public function __construct(Database $db)
    {
        $this->db=$db;
        if (is_null($this->table)) {
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name));
        }
    }

    public function all()
    {
         return $this->db->query('Select * FROM articles');
    }
    
}