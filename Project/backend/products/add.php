<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
    $postData = [
        'pname' => $_POST['pname'],
        'pimage' => $_FILES['pimage']['name'],
        'category' => $_POST['category'],
        'quantity' => $_POST['quantity'],
        'price' => $_POST['price']
    ];

    if (empty($postData['pname']) || empty($postData['pimage']) || empty($postData['category']) || empty($postData['quantity']) || empty($postData['price'])) {
        echo "Hiányzó adatok!";
    } else {
        $target_dir = '/AFP_2nd_project/Project/Product_Images/';
        $target_file = $_SERVER['DOCUMENT_ROOT'].$target_dir.basename($_FILES['pimage']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "Csak jpg, png és jpeg formátum használható!";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Fájl feltöltése sikertelen.";
        } else {
            move_uploaded_file($_FILES['pimage']['tmp_name'], $target_file);
        }

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
    <form method="post" enctype="multipart/form-data">
        <div class="form_add_row">
            <label for="pname"><b>Név</b></label>
            <input type="text" name="pname" placeholder="Név" class="addElements">
        </div>
        <div class="form_add_row">
            <label for="pimage"><b>Kép</b></label>
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