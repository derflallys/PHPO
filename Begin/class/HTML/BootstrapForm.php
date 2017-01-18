<?php
namespace Tutoriel\HTML;
/**
 * Created by PhpStorm.
 * User: ABOUBACAR
 * Date: 13/01/2017
 * Time: 00:49
 */
class BootstrapForm extends Form
{
    protected function surround($html)
    {
        return "<div class=\"form-group\">{$html}</div>";
    }


    public function input($name)
   {
       return  $this->surround(
           '<label>'.$name.'</label><input type="text" name="'.$name.'" value="'.$this->getValue($name).'" class="form-control">');
   }

   public function submit()
   {
       return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
   }
}