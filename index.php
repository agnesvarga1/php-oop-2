<?php 
include_once __DIR__."./models/Product.php";
include_once __DIR__."./models/PetType.php";
include_once __DIR__."./models/Food.php";
include_once __DIR__."./models/Toy.php";
include_once __DIR__."./models/Bed.php";
require_once __DIR__."./traits/rates.php";

$product1 = new Bed ("Luxory Cat Heaven",15.99,"./imgs/catbed.webp", new Pettype("cat"));
$product2 = new Food("Premium Meat Delish",1.59, "./imgs/dogfood.jpg",new Pettype("dog"));
$product3 = new Toy("Tennis Ball for Dogs",2.99,"./imgs/dogball.webp", new Pettype("dog"));
// var_dump($product1);
// var_dump($product2);
$product4 = new Product("Small Feeding Bowl",2.88,new Pettype("cat"));
$product4->setRating(4);
//var_dump($product4);
$products =  [$product1, $product2,$product3,$product4];

var_dump($products);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <title>Pet Shop Site</title>
</head>
<body>
    <h1 class="p-3 text-warning text-center">Pet Superstore</h1>
  <div class="container">
  <h2>All products</h2>

<div class="row">
<?php foreach ($products as $item): ?>
  
  <div class="card m-2" style="width: 18rem;">
   <?php if(($item->img)):?>
  <img src="<?= $item->img;?>" class="card-img-top " alt="product image">
  <?php else :?>
    <p>No image</p>
   
<?php endif;?>
  <div class="card-body">
  <div>
  <?php if($item->animal):?>
  <i  class="fa-solid fa-dog <?= ( $item->animal->pettype == "dog" ) ? 'd-block' : 'd-none' ?>"></i>
  <i class="fa-solid fa-cat <?= ( $item->animal->pettype == "cat" ) ? 'd-block' : 'd-none' ?>"></i>
    
  <?php endif;?>
  </div>
  <h5 class="card-title"><?= $item->getProductName()?></h5>
  <span>&euro; <?= $item->getPrice()?></span>

  <span><?= $item->productType?></span>

  <div class="mt-2">
  <a href="#" class="btn btn-success">Add to Cart</a>
  </div>

</div>
</div>
<?php endforeach?>
</div>
  </div>
  
  
    
</body>
</html>