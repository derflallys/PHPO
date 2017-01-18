<?php

/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 13/01/2017
 * Time: 00:17
 */
class Archer extends Personnage
{
    protected $vie=40 ;

    public function __construct($nom)
    {
        $this->vie=$this->vie/2;
        parent::__construct($nom);
    }

    public function attaque($adv)
     {
         $adv->vie-=$this->atk;
         parent::attaque($adv); // TODO: Change the autogenerated stub
     }
}