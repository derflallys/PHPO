<?php
namespace Tutoriel;
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 10/01/2017
 * Time: 21:06
 */
class Personnage
{

    protected $vie=10;
    protected $atk=20;
    protected $nom;
    public function __construct ($nom)
    {
        $this->nom=$nom;
    }
    public function regenerer($point=null)
    {
        if (is_null($point))
        {
            $this->vie=100;
        }
        else
        {
            $this->vie+=$point;
        }
    }
    public function mort()
    {
        return($this->vie<=0);
    }

    public function attaque($adv)
    {
        if($this->atk>$adv->atk)
        {
            $adv->vie-=$this->atk;
        }
        else
        {
            $this->vie-=$adv->atk;
        }
    }


}