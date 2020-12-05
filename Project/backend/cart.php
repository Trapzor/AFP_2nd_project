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
if(array_key_exists('d_id',$_GET) && !empty($_GET['d_id'])) {
    $query = "DELETE FROM shopping_cart WHERE user_id = :user_id AND product_id = :product_id";
    $params = [
        ':user_id' => IsUserLoggedIn() ? $_SESSION['uid'] : 0,
        ':product_id' => $_GET['d_id']
    ];
    require_once "backend/dbFunctions.php";
    if (executeDML($query, $params)) {
        header("Location: index.php?p=cart");
    } else {
        echo("Hiba a kosárelem törlésekor!");
    }
}
$query = "SELECT id, name, price FROM products WHERE id IN (SELECT product_id FROM shopping_cart WHERE user_id = :uid)";
$params = [ ':uid' => IsUserLoggedIn() ? $_SESSION['uid'] : 0];
require_once "backend/dbFunctions.php";
$shopping_list = getList($query, $params);
$itemPrice = 0;
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
                        <a href="#" class="cart-quantity-button minus"><i class="fa fa-minus"></i></a>
                        <span class="cart-quantity">1</span>
                        <a href="#" class="cart-quantity-button plus"><i class="fa fa-plus"></i></a>
                    </div>
                    <span class='itemprice'><?=$l['price']?> Ft</span>
                    <?php $itemPrice = $itemPrice + $l['price']; ?>
                </div>
                <div class="cart-remove-panel">
                    <a href="index.php?p=cart&d_id=<?=$l['id']?>" class="cart-remove-button"><i class="fa fa-trash"></i></a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <hr>
        <div class="cart-summary-panel">
            <span class="cart-summary">Összesen: </span> 
            <span class="cart-summary cart-items-price"><?=Count($shopping_list) > 0 ? $itemPrice : 0?> Ft</span>
            <button type="submit" class="cart-order-button">Megrendelés</button>
        </div>
    </div>
</div>
<script>
cartSetup();
</script>