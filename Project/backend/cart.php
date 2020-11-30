<?php if(array_key_exists('i',$_GET) && !empty($_GET['i'])) {
    $query = "INSERT INTO shopping_cart (user_id, product_id) VALUES (:user_id, :product_id)";
    $params = [
        ':user_id' => IsUserLoggedIn() ? $_SESSION['uid'] : 0,
        ':product_id' => $_GET['i']
    ];
    require_once "backend/dbFunctions.php";
    if (executeDML($query, $params)) {
        header("Location: index.php?p=browse");
    } else {
        echo("Hiba a kosárba helyezéskor");
    }
}
$query = "SELECT name, price FROM products WHERE id IN (SELECT product_id FROM shopping_cart WHERE user_id = :uid)";
$params = [ ':uid' => IsUserLoggedIn() ? $_SESSION['uid'] : 0];
require_once "backend/dbFunctions.php";
$shopping_list = getList($query, $params);
?>
<div class="cart">
<h2>Kosár</h2>
    <div class="cart-outline">
        <span class="cart-header cart-item-name">Megnevezés</span>
        <span class="cart-header cart-item-quantity">Darabszám</span>
        <span class="cart-header cart-item-price">Ár</span>
        <?php if (Count($shopping_list) > 0) :?>
            <?php foreach ($shopping_list as $l) : ?>
                <div class="item">
                    <span><?=$l['name']?></span> 
                    <div class="cart-quantity-panel">
                        <a href="#" class="cart-quantity-button"><i class="fa fa-minus"></i></a>
                        <span class="cart-quantity">1</span>
                        <a href="#" class="cart-quantity-button"><i class="fa fa-plus"></i></a>
                    </div>
                    <span class='itemprice'><?=$l['price']?> Ft</span>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
