<?php
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 15/01/2017
 * Time: 23:49
 */

namespace app;
use \PDO;


class Database
{
    private $dbname;
    private $dbuser;
    private $dbpass;
    private $dbhost;
    private $pdo;
    public function __construct($dbname,$dbuser='root',$dbpass='',$dbhost='localhost')
    {
        $this->dbname=$dbname;
        $this->dbuser=$dbuser;
        $this->dbpass=$dbpass;
        $this->dbhost=$dbhost;

    }
    private function getPDO()
    {
        if($this->pdo===null) {
            $pdo = new PDO("mysql:dbname=blog;host=localhost", 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        } 
            return $this->pdo;
    }
    public function query($stat,$class,$one=false)
    {
        $req= $this->getPDO()->query($stat);
        $req->setFetchMode(PDO::FETCH_CLASS,$class);
        if($one)
        {
            $data=$req->fetch();
        }
        else
        {
            $data=$req->fetchAll();
        }
        return $data;
    }

    public function prepare($stat,$value,$class,$one=false)
    {
        //setfetchmode pour choisir le mode de fetch  genre pdo fetch class or obj kw
        $req = $this->getPDO()->prepare($stat);
        $req->execute($value);

        $req->setFetchMode(PDO::FETCH_CLASS,$class);

        if($one)
        {
            $data=$req->fetch();
        }
        else
        {
            $data=$req->fetchAll();
        }
        return $data;
    }
}