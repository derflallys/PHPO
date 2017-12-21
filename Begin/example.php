<?php
namespace Tutoriel;

/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 13/01/2017
 * Time: 00:16
 */

require 'class/Autoloader.php';
Autoloader::register();
$merlin= new Personnage("Melin");
$harry= new Personnage("Harry");
$alfred =new Archer("Alfred");
var_dump($merlin);