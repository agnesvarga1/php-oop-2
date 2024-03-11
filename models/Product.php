<?php
require_once __DIR__ .  '/../traits/rates.php';
class Product {
    protected $productName;
    protected $price;
    public $productType;
    public $img;
    use ProductRates;
   public function __construct($_name,$_price, $_type="",$_img=""){
        $this->productName = $_name;
        $this->price = $_price;
        $this->productType =$_type;
        $this->img = $_img;
    }

    

    public function getProductName(){
        return $this ->productName;
    }


    public function getPrice(){
        return $this ->price;
    
    }

 
}