<?php
if (array_key_exists('d_id', $_GET) && !empty($_GET['d_id'])) {
    $query = "DELETE FROM users WHERE id = :id";
	$params = [':id' => $_GET['d_id']];
	require_once 'backend/dbFunctions.php';
	if(!executeDML($query, $params)) {
		echo "<script>alert('Hiba a törlés közben!');</script>";
	} else { header('Location: index.php?p=logout'); }
}

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
        echo "<script>alert('Hiányzó adatok!');</script>";
    } else if(!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Hibás e-mail formátum!');</script>";
    } else {
        $query = "UPDATE users SET id = :id, name = :name, address = :address, phone_number = :phone_number, email = :email WHERE id = :id";
        $params = [
            ':id' => $postData['id'],
            ':name' => $postData['name'],
            ':address' => $postData['address'],
            ':phone_number' => $postData['phone_number'],
            ':email' => $postData['email']
        ];

        require_once 'backend/dbFunctions.php';
        if (!executeDML($query, $params)) {
            echo "<script>alert('Hiba az adatok bevitelekor!');</script>";
        } else header("Location: index.php?p=logout");
    }
}
?>

<center><h2><?=$_SESSION['name']?> profilja</h2></center>
</br>
<h4 class="moveIt">Személyes információk</h4>
<hr/>
<div class="regContainer">
<form method="post">
    <input type="hidden" name="id" value="<?=$_SESSION['uid']?>"> 
        <label for="name">Név</label>
        <input type="text" name="name" class="regElements" value="<?=$_SESSION['name']?>">
        <label for="Address">Lakcím</label>
        <input type="text" name="address" class="regElements" value="<?=$_SESSION['address']?>">
        <label for="phone_number">Telefonszám</label>
        <input type="text" name="phone_number"  class="regElements" value="<?=$_SESSION['phone_number']?>">
        <label for="email">E-mail</label>
        <input type="email" name="email" class="regElements" value="<?=$_SESSION['email']?>">     
        <input type="submit" class="regButton" name="modify" value="Módosítás">
    
</form>
</div>
<h4 class="moveIt">Fiók információk</h4>
<hr/>
<div class="bg_lightgray">
    Amennyiben úgy gondolja, hogy nincs szükség a fiókjára azt itt törölheti.
    <a href="index.php?p=profile&d_id=<?=$_SESSION['uid']?>" class="btnDelete">Fiók törlése</a>
</div>