<?php if(array_key_exists('s',$_GET) && !empty($_GET['s'])) {
    $query = "SELECT id, name, image, category, rating, price FROM products WHERE id = :id";
    $params = [ ':id' => $_GET['s']];
    require_once 'backend/dbFunctions.php';
    if (executeDML($query, $params)) {
        $product = getRecord($query, $params);
    }
    else {
        echo("Hiba a termék betöltése közben");
    }
}

if(array_key_exists('f',$_GET) && !empty($_GET['f'])) {
    if (IsUserLoggedIn()) {
        $query = "INSERT INTO favorite_products (id, uid) VALUES (:id, :uid)";
        $params = [
            ':id' => $product['id'],
            ':uid' => $_SESSION['uid']
        ];
        require_once 'backend/dbFunctions.php';
        if (executeDML($query, $params)) {
            header("Location: index.php?s=".$product['id']);
        }
        else {
            echo("Hiba a termék hozzáadása közben");
        }
    } else {
            echo("A funkció használatához először jelentkezzen be");
    }
}
?>


<div class="product">
    <a href="index.php?p=browse" id="backToBrowse"><i class="fa fa-arrow-left"></i></a>
    <a href="index.php?p=show&s=<?=$product['id']?>&f=<?=$product['id']?>" id="addToFavorite"><i class="fa fa-heart"></i></a>
    <h3><?=$product['name']?></h3>
    <hr>
    <img src="Product_images/<?=$product['image']?>">
    <h4 id="rating"><?=$product['rating']?></h4>
    <h4 id="category"><?=$product['category']?></h4>
    <h3><?=$product['price']?> Ft</h3>
    <hr>
    <button><i class="fa fa-shopping-basket"></i></button>
</div>