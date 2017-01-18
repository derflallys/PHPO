<?php
//var_dump($data);
//print_r($data);
foreach ($data as $post)
{
    echo "<h2><a href=".$post->url.">".$post->titre."</a></h2>";
    echo $post->extrait;
    //echo "<p>".$post->getExtrait()."</p>";
}

