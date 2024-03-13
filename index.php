<?php 
include_once __DIR__."./models/Product.php";
include_once __DIR__."./models/PetType.php";
include_once __DIR__."./models/Food.php";
include_once __DIR__."./models/Toy.php";
include_once __DIR__."./models/Bed.php";
require_once __DIR__."./traits/rates.php";
$dog = new Pettype("dog");
$cat = new Pettype("cat");
$product1 = new Bed ("Luxory Cat Heaven",15.99, $cat,"./imgs/catbed.webp");
$product2 = new Food("Premium Meat Delish",1.59, $dog,"./imgs/dogfood.jpg");
$product3 = new Toy("Tennis Ball for Dogs",2.99, $dog,"./imgs/dogball.webp");

// var_dump($product2);
$vote = $_POST["rate"] ?? null;
if($vote <> null){

}
$product1->setRating(4);

try{
  $product2->setRating(10);
  var_dump($product2->getRating);
}catch(Exception $e){
  echo $e->getMessage();
}

$products =  [$product1, $product2,$product3];
 //var_dump($product1);

//var_dump($products);


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

  <img src="<?= $item->getimg();?>" class="card-img-top " alt="product image">


  <div class="card-body">
  <div>

  <i  class="fa-solid fa-dog <?= ( $item->petType->pettype == "dog" ) ? 'd-block' : 'd-none' ?>"></i>
  <i class="fa-solid fa-cat <?= ( $item->petType->pettype == "cat" ) ? 'd-block' : 'd-none' ?>"></i>
    
 
  </div>
  <h5 class="card-title"><?= $item->getProductName()?></h5>
  <span>&euro; <?= $item->getPrice()?></span>

  <span><?= $item->getproductType();?></span> 
  <?php  if($item->getRating() <> null):?>
  <span>Voto: <?=$item->getRating();?></span>
  <?php endif;?>
  <div class="mt-2">
  <a href="#" class="btn btn-success">Add to Cart</a>
  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Vote
</button>
  </div>

</div>
</div>
<?php endforeach?>
</div>
  </div>
  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Rate this product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="index.php" method="POST">
        <input type="text" id="rate" name="rate" >
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add your vote</button>
      </div>
      </form>
    </div>
  </div>
</div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>