<?php
namespace Tutoriel\HTML;
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 12/01/2017
 * Time: 18:58
 * Class Form
 * Permet de generer un petit formulaire
 */

class form
{
    /**
     * @var array
     */
    protected $data ;
    /**
     * @var string Tag utilisé pour entourer les champs .
     */
    public $surround='p';

    /**
     * form constructor.
     * @param array $data
     */
    public function __construct($data=array())
     {
            $this->data=$data;
     }

    /**
     * @param $html
     * @return string
     */
    protected function surround ($html)
     {
         return "<{$this->surround}>{$html}</{$this->surround}>";
     }

    /**
     * @param $index
     * @return mixed|null permet de verifier si le nom exist dans le formular
     */
    protected function getValue($index)
     {
         return isset($this->data[$index])? $this->data[$index]:null;
     }

    /**
     * @param $name
     * @return string
     */
    public function input($name )
     {
        return $this->surround('<input type="text" name='.$name.' value='.$this->getValue($name).'>');
     }

    /**
     * @return string retourne une balise bouton en HTML
     */
    public function submit ()
     {
         return $this->surround('<button type="submit">Envoyer</button>');
     }


}