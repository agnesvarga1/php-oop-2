<?php
class Food extends Product {
    public $animal;
    protected $prodCat = "Food";
    protected $img;
    
 public function __construct($_productName , $_price,$_img,Pettype $_animal){
         parent :: __construct($_productName, $_price,$this->prodCat );
         $this->animal = $_animal;
         $this->img = $_img;
    }
   
 public function getData(){
  
   $details = [$this->prodCat , $this->img];

 }

}
