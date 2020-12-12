<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
    $postData = [
        'pname' => $_POST['pname'],
        'pimage' => $_POST['pimage'],
        'category' => $_POST['category'],
        'quantity' => $_POST['quantity'],
        'price' => $_POST['price']
    ];

    if (empty($postData['pname']) || empty($postData['pimage']) || empty($postData['category']) || empty($postData['quantity']) || empty($postData['price'])) {
        echo "Hiányzó adatok!";
    } else {
        $query = "INSERT INTO products (name, image, category, rating, quantity, price) VALUES (:name, :image, :category, :rating, :quantity, :price)";
        $params = [
            ':name' => $postData['pname'],
            ':image' => $postData['pimage'],
            ':category' => $postData['category'],
            ':rating' => 0,
            ':quantity' => $postData['quantity'],
            ':price' => $postData['price']
        ];
        require_once 'backend/dbFunctions.php';
        if (!executeDML($query, $params)) {
            echo "Hiba a hozzáadás során!";
        } header("Location: index.php?p=add");
    }
}
?>

<div class="image-container">
    <img id="preview" alt="A feltöltött kép">
</div>
<div class="addFormContainer">
    <form method="post">
        <div class="form_add_row">
            <label for="pname"><b>Név</b></label>
            <input type="text" name="pname" placeholder="Név" class="addElements">
        </div>
        <div class="form_add_row">
            <label for="pimage"><b>Kép</b></label>
            <small>(A képnek a Product_Images mappában kell lennie!)</small>
            <input type="file" name="pimage" class="addElements" accept="image/*" onchange="loadFile(event)">
        </div>
        <div class="form_add_row">
            <label for="category"><b>Kategória</b></label>
            <input type="text" name="category" placeholder="Kategória" class="addElements">
        </div>
        <div class="form_add_row">
            <label for="quantity"><b>Darabszám</b></label>
            <input type="text" name="quantity" placeholder="Darabszám" class="addElements">
        </div>
        <div class="form_add_row">
            <label for="price"><b>Ár</b></label>
            <input type="text" name="price" placeholder="Ár" class="addElements">
        </div>
        <div class="form_add_row">
            <input type="submit" name="add" value="Hozzáad" class="addButton">
        </div>
    </form>
<div>