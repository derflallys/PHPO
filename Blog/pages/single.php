<?php
use app\Table\Article;
use app\Table\Categorie;
$data=Article::find($_GET['id']);
if ($data==null)
{
    \app\App::notFound();
}

//var_dump($data);
echo "<h2>".$data->titre."</h2>";
echo "<p><em>".$data->categorie."</em></p>";
echo "<p>".$data->contenu."</p>";
