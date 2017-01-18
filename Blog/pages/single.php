<?php

$data=\app\App::getDb()->prepare('SELECT * from articles WHERE  id=?',[$_GET['id']],'\app\Table\Article');
//var_dump($data);
echo "<h2>".$data[0]->titre."</h2>";
echo "<p>".$data[0]->contenu."</p>";
