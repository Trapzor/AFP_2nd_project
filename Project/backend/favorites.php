<?php if (IsUserLoggedIn()) {
    $query = "SELECT id, name, image, price FROM products WHERE id IN (SELECT id FROM favorite_products WHERE uid = :uid)";
    $params = [ ':uid' => $_SESSION['uid']];
    require_once "backend/dbFunctions.php";
    $fav_list = getList($query, $params);
} else {
    $fav_list = [];
    echo("Ahhoz, hogy a termékeket hozzáadd a kedvencekhez, előbb be kell jelentkezni!");
}

?>
<h2 class="productsHeader">Kedvenc termékek</h2>
<div class="productList">
    <?php if (Count($fav_list) > 0) :?>
        <?php foreach ($fav_list as $p) : ?>
            <div class="productCard">
                <a href="index.php?p=show&s=<?=$p['id']?>">
                    <h4><?=$p['name']?></h4>
                    <img src="Product_Images/<?=$p['image']?>">
                </a>
                <div class="orderContainer">
                    <?=$p['price']?> Ft
                    <button id="addToCart">Kosárba</button>
                </div>
            </div>
        <?php endforeach;?>
    <?php endif;?>
</div>

