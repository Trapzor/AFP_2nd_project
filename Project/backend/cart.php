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
    <?php if (Count($shopping_list) > 0) :?>
        <?php foreach ($shopping_list as $l) : ?>
            <div class="item">
                <span><?=$l['name']?><span> <span id='itemprice'><?=$l['price']?> Ft</span>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
