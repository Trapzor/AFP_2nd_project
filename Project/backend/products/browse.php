<?php
$query = "SELECT id, name, image, price FROM products";
require_once 'backend/dbFunctions.php';
$list = getList($query);
?>
<div class="productsHeader"> <h2>Termékeink</h2> </div>

<div class="productList">
    <?php foreach ($list as $i): ?>
        <div class="productCard">
            <a href="index.php?p=show&s=<?=$i['id']?>">
                <h4><?=$i['name']?></h4>
                <img src="Product_Images/<?=$i['image']?>">
            </a>
            <div class="orderContainer">
                <?=$i['price']?> Ft
    <a  href="index.php?p=show&s=<?=$i['id']?>">
                <button id="addToCart">Kosárba</button>
    </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>