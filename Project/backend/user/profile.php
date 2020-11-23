<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['modify'])) {
    $postData = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'address' => $_POST['address'],
        'phone_number' => $_POST['phone_number'],
        'email' => $_POST['email']
    ];

    if($_SESSION['name'] == $postData['name'] && $_SESSION['address'] == $postData['address'] && $_SESSION['phone_number'] == $postData['phone_number'] && $_SESSION['email'] == $postData['email']) {
        header("Location: index.php?p=profile");
    } else if(empty($postData['name']) || empty($postData['address']) || empty($postData['email']) || empty($postData['phone_number'])) {
        echo "Hiányzó adat(ok)!";
    } else if(!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Hibás email formátum!";
    } else {
        $query = "UPDATE users SET id = :id, name = :name, address = :address, phone_number = :phone_number, email = :email WHERE id = :id";
        $params = [
            ':id' => $postData['id'],
            ':name' => $postData['name'],
            ':address' => $postData['address'],
            ':phone_number' => $postData['phone_number'],
            ':email' => $postData['email']
        ];

        if (!executeDML($query, $params)) {
            echo "Hiba az adatok bevitelekor!";
        } else header("Location: index.php?p=logout");
    }
}
?>

<center><h2><?=$_SESSION['name']?> profilja</h2></center>
<h4>Személyes információk</h4>
<hr/>
<form method="post" class="bg_lightgray">
    <input type="hidden" name="id" value="<?=$_SESSION['uid']?>">
    <div class="form_modify_row">
        <label for="name">Név</label>
        <input type="text" name="name" value="<?=$_SESSION['name']?>">
    </div>
    <div class="form_modify_row">
        <label for="Address">Lakcím</label>
        <input type="text" name="address" value="<?=$_SESSION['address']?>">
    </div>
    <div class="form_modify_row">
        <label for="phone_number">Telefonszám</label>
        <input type="text" name="phone_number" value="<?=$_SESSION['phone_number']?>">
    </div>
    <div class="form_modify_row">
        <label for="email">Email cím</label>
        <input type="email" name="email" value="<?=$_SESSION['email']?>">
    </div>
    <div class="form_modify_row">
        <input type="submit" name="modify" value="Módosítás">
    </div>
</form>

<h4>Fiók információk</h4>
<hr/>
<div class="bg_lightgray">
    Amennyiben úgy gondolja, hogy nincs szükség a fiókjára azt itt törölheti.
    <a href="index.php?p=profile&d_id=<?=$_SESSION['uid']?>" class="btnDelete">Fiók törlése</a>
</div>