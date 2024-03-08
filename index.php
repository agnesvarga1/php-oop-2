<?php 
include_once __DIR__."./models/Product.php";
include_once __DIR__."./models/PetType.php";
include_once __DIR__."./models/Food.php";
include_once __DIR__."./models/Toy.php";
include_once __DIR__."./models/Bed.php";


$product1 = new Bed ("Luxory Cat Heaven",15.50,"./img/catbed.webp", new Pettype("cat"));
$product2 = new Food("Premium Meat Delish",1.50, "./img/dogfood.jpg",new Pettype("dog"));
$product3 = new Toy("Tennis Ball for Dogs",2.99,"./img/dogball.webp", new Pettype("dog"));
// var_dump($product1);
// var_dump($product2);

$products =  [$product1, $product2,$product3];

//var_dump($products);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <title>Pet Shop Site</title>
</head>
<body>
    <h1 class="p-3 text-warning text-center">Pet Superstore</h1>
    
</body>
</html>