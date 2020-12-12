<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['filterButton'])) {
    if (!empty($_POST['filterInput'])) {
        header('Location: index.php?p=browse&f='.$_POST['filterInput']);
    } else {
        header('Location: index.php?p=browse');
    }
    
}

if (array_key_exists('f', $_GET) || !empty($_GET['f'])) {
    $query = "SELECT id, name, image, price FROM products WHERE name LIKE '%".$_GET['f']."%'";
} else {
    $query = "SELECT id, name, image, price FROM products";
}
require_once 'backend/dbFunctions.php';
$list = getList($query);
?>

<div>

<h2 class="filterBarText">Összes elérhető termék a shopban:</h2>
    <form method="post">
        <div class="filterBar">
        <input type="text" name="filterInput" placeholder="Keresés"></input>
        <button type="submit" name="filterButton"><i class="fa fa-search"></i></button>
        </div>
    </form>

<?php if (IsUserLoggedIn() && !empty($_SESSION['permission']) && $_SESSION['permission'] > 0): ?>
    <div class="add-product">
        <a href="index.php?p=add" class="add-product-button"><i class="fa fa-plus"></i></a>
    </div>
<?php endif; ?>

    <div class="productList">
        <?php foreach ($list as $i): ?>
            <div class="productCard">
                <a href="index.php?p=show&s=<?=$i['id']?>">
                    <h4><?=$i['name']?></h4>
                    <img src="Product_Images/<?=$i['image']?>">
                </a>
                <div class="orderContainer">
                    <?=$i['price']?> Ft
        <a  href="index.php?p=cart&i=<?=$i['id']?>">
                    <button id="addToCart" class="fa fa-shopping-basket"></button>
        </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>