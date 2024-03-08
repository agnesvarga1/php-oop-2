<?php
class Food extends Product {
    public $animal;
    private $prodCat = "Food";
    
 public function __construct($_productName , $_price, Pettype $_animal){
         parent :: __construct($_productName, $_price,$this->prodCat );
         $this->animal = $_animal;
    }
   
 

}
