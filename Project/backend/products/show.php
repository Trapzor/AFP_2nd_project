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
    <h3><?=$product['name']?></h3>
    <img src=<?=$product['image']?>>
    <h4><?=$product['category']?></h4>
    <h4><?=$product['rating']?></h4>
    <h3><?=$product['price']?></h3>
</div>