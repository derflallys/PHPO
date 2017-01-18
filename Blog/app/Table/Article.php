<?php
namespace app\Table;
use app\App;

/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 16/01/2017
 * Time: 20:50
 */
class Article
{

    public function __get($name)
    {
        // TODO: Implement __get() method.
        $method= 'get'.ucfirst($name);
        $this->$name = $this->$method();
        return $this->$name;
    }

    public function getUrl()
    {
        return "index.php?p=article&id=".$this->id ;
    }
    public function getExtrait()
    {
        $html="<p>".substr($this->contenu,0,100)."...</p>";
        $html.="<p><a href=".$this->getURL().">Voir la Suite</a></p>";
        return $html;
    }
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     *
     */
    public static function getLast()
    {
        return App::getDb()->query('SELECT * from articles',__CLASS__);
    }
}