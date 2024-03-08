<?php
class Product {
    public $productName;
    protected $price;
    public $productType;
    
    
   public function __construct($_name,$_price, $_type=""){
        $this->productName = $_name;
        $this->price = $_price;
        $this->productType =$_type;
    }

    

    public function getProductName(){
        return $this ->productName;
    }


    public function getPrice(){
        return $this ->price;
    
    }

 
}