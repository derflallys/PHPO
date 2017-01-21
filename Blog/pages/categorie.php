<?php
use app\Table\Article;
use app\Table\Categorie;
use app\App;
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 21/01/2017
 * Time: 03:18
 */
$categorie = Categorie::find($_GET['id']);
if ($categorie==null)
{
    App::notFound();
}
$article = Article::lastByCategory($_GET['id']);
$categories = Categorie::all();
//var_dump($categorie);
?>
<h1><?php echo $categorie->titre ?></h1>
<div class="row">
    <div class="col-sm-8">
        <?php
        foreach ($article as $post)
        {
            echo "<h2><a href=".$post->url.">".$post->titre."</a></h2>";
            echo "<p><em>".$post->categorie."</em></p>";
            echo $post->extrait;
        }
        ?>
    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach ($categories as $post)
            {
                echo "<li><a href=".$post->url.">".$post->titre."</a></li>";
            }
            ?>
        </ul>

    </div>
</div>

