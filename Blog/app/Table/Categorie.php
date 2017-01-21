<?php
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 20/01/2017
 * Time: 22:14
 */

namespace app\Table;


use app\App;

class Categorie extends Table
{
    protected static $table="categorie";

    public function getUrl()
    {
        return "index.php?p=categorie&id=".$this->id ;
    }
    public function getCategorie()
    {
        return $this->categorie;
    }
}