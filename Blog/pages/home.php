
<div class="row">
    <div class="col-sm-8">
        <?php
        //var_dump($data);
        //print_r($data);
        foreach ($dataArticle as $post)
        {
            //var_dump($post);
            echo "<h2><a href=".$post->url.">".$post->titre."</a></h2>";
            echo "<p><em>".$post->categorie."</em></p>";
            echo $post->extrait;
            //echo "<p>".$post->getExtrait()."</p>";
        }
        ?>
    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach ($dataCategorie as $post)
            {
                echo "<li><a href=".$post->url.">".$post->titre."</a></li>";
            }
            ?>
        </ul>

    </div>
</div>
