<?php
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 15/01/2017
 * Time: 19:18
 */

require '../app/Autoloader.php';
\app\Autoloader::register();


$config =  \app\Config::getInstance();
$app = \app\App::getDb();
var_dump($app);

/*

if (isset($_GET['p']))
{
    $p=$_GET['p'];
}
else
{
    $p='home';
}
//Initialisatioin  des Objects
$dataArticle=\app\Table\Article::getLast();
$dataCategorie=\app\Table\Categorie::all();

ob_start();
if($p==='home')
{
    require '../pages/home.php';
}
elseif ($p=='article')
{
    require '../pages/single.php';
}
elseif($p=='categorie')
{
    require '../pages/categorie.php';
}
$content=ob_get_clean();
require '../pages/template/default.php';*/