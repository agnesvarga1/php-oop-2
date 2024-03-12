<?php
require_once __DIR__ .  '/../traits/rates.php';
class Food extends Product {
    public $animal;
    public $prodCat = "Food";
    public $img;
    use ProductRates;
 public function __construct($_productName , $_price,$_img,Pettype $_animal){
         parent :: __construct($_productName, $_price,$this->prodCat );
         $this->animal = $_animal;
         $this->img = $_img;
    }
   

    // public function getimg(){
    //     return $this->img;
         
    //    }
      
    //    public function getCat(){
    //       return $this->prodCat;
    //    }
  }
 

