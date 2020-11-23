<?php if(array_key_exists('s',$_GET) && !empty($_GET['s'])) {
    $query = "SELECT name, image, category, rating, price FROM products WHERE id = :id";
    $params = [ ':id' => $_GET['s']];
    require_once 'backend/dbFunctions.php';
    if (executeDML($query, $params)) {
        $product = getRecord($query, $params);
    }
    else {
        echo("Hiba a termék betöltése közben");
    }
}
?>


<div class="product">
    <a href="index.php?p=browse" id="backToBrowse"><i class="fa fa-arrow-left"></i></a>
    <a href="#" id="addToFavorite"><i class="fa fa-heart"></i></a>
    <h3><?=$product['name']?></h3>
    <hr>
    <img src="Product_images/<?=$product['image']?>">
    <h4 id="rating"><?=$product['rating']?></h4>
    <h4 id="category"><?=$product['category']?></h4>
    <h3><?=$product['price']?></h3>
    <hr>
    <button><i class="fa fa-shopping-basket"></i></button>
</div>