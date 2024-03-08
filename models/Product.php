<?php
class Product {
    protected $productName;
    protected $price;

    public function getProductName(){
        return $this ->productName;
    }

    public function setProductName($newProduct){
        return $this->price = $newProduct;
    } 

    public function getPrice(){
        return $this ->price;
    
    }

    public function setPrice($newPrice){
        return $this-> price = $newPrice;
    }
}