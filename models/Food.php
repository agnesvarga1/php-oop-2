<?php
require_once __DIR__ .  '/../traits/rates.php';
class Food extends Product {
      
    protected $img;
    use ProductRates;
    public function __construct($_name,$_price,Pettype $_pettype,$_img=""){
         parent :: __construct( $_name,$_price,$_pettype);
        $this->img =$_img;
    }
   

    public function getimg(){
        return $this->img;   
       }
      
      
    public function getProductType(){
      return get_class();
  }
    

    //    public function getCat(){
    //       return $this->prodCat;
    //    }
  }
 

