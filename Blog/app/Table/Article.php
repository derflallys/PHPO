<?php
namespace app\Table;
use app\App;

/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 16/01/2017
 * Time: 20:50
 */
class Article extends Table
{

    /**
     * @var string
     */
    protected static $table="articles";

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        // TODO: Implement __get() method.
        $method= 'get'.ucfirst($name);
        $this->$name = $this->$method();
        return $this->$name;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return "index.php?p=article&id=".$this->id ;
    }

    /**
     * @return string
     */
    public function getExtrait()
    {
        $html="<p>".substr($this->contenu,0,100)."...</p>";
        $html.="<p><a href=".$this->getURL().">Voir la Suite</a></p>";
        return $html;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }


    /**
     * @return array|mixed
     */
    public static function getLast()
    {
        return self::query('SELECT a.id, a.titre,contenu,c.titre as categorie from articles a 
              LEFT JOIN categorie c on id_categorie = c.id');
    }

    /**
     * @param $id
     * @return array|mixed
     */
    public static function lastByCategory ($id)
    {
        return self::query('SELECT a.id, a.titre,contenu,c.titre as categorie from articles a 
                        LEFT JOIN categorie c on id_categorie = c.id WHERE id_categorie=?',[$id]);
    }

    /**
     * @param $id
     * @return array|mixed
     */
    public static function find($id)
    {
        return self::query('SELECT a.id, a.titre,contenu,c.titre as categorie from articles a 
                        LEFT JOIN categorie c on id_categorie = c.id WHERE a.id=?',[$id],get_called_class(),true);
    }
}