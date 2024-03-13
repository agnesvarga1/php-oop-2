<?php
require_once __DIR__ .  '/../traits/rates.php';
class Product {
    protected $name;
    protected $price;
   // public $productType;
  
    public $petType;
    use ProductRates;
   public function __construct($_name,$_price,Pettype $_pettype){
        $this->name = $_name;
        $this->price = $_price;
        //$this->productType =$_type;
 
        $this->petType = $_pettype;
    }

    

    public function getProductName(){
        return $this ->name;
    }


    public function getPrice(){
        return $this ->price;
    
    }

 
}