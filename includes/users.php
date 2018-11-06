<?php
/**
 * Created by PhpStorm.
 * User: seansexton
 * Date: 04/10/2018
 * Time: 21:06
 */

class Users {
  public $first;
  public $last;
  public $hairColour;
  public $eyeColour;

  public function __construct($first, $last, $hairColour, $eyeColour){

    $this->first = $first;
    $this->last = $last;
    $this->hairColour = $hairColour;
    $this->eyeColour = $eyeColour;

  }

  public function fullName(){
    return $this->first." ".$this->last;
  }

}