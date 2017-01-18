<?php
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 15/01/2017
 * Time: 19:18
 */

require '../app/Autoloader.php';
\app\Autoloader::register();

if (isset($_GET['p']))
{
    $p=$_GET['p'];
}
else
{
    $p='home';
}
//Initialisatioin  des Objects
$data=\app\Table\Article::getLast();

ob_start();
if($p==='home')
{
    require '../pages/home.php';
}
elseif ($p=='article')
{
    require '../pages/single.php';
}
$content=ob_get_clean();
require '../pages/template/default.php';