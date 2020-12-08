<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $postData = [
        'name' => $_POST['name'],
        'address' => $_POST['address'],
        'phone_number' => $_POST['phone_number'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'password1' => $_POST['password_confirm']
    ];

    if (empty($postData['name']) || empty($postData['address']) || empty($postData['phone_number']) || empty($postData['email']) || empty($postData['password']) || empty($postData['password1'])) {
        echo "<script>alert('Hiányzó adatok!');</script>";
    } else if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Hibás e-mail formátum!');</script>";
    } else if ($postData['password'] != $postData['password1']) {
        echo "<script>alert('A jelszavak nem egyeznek!');</script>";
    } else if (strlen($postData['password']) < 8) {
        echo "<script>alert('A jelszó túl rövid, legalább 8 karakter hosszú kell, hogy legyen!');</script>";
    } else if (!UserRegister($postData['email'], $postData['password'], $postData['name'], $postData['address'], $postData['phone_number'])) {
        echo "<script>alert('Sikertelen regisztráció!');</script>";
    }

    $postData['password'] = $postData['password1'] = "";
}

?>
<div class="regContainer">
<form method="post" class="form_register">
    <div class="form_register_row">
        <label for="name"><b>Név</b></label>
        <input type="text" name="name" placeholder="Név" class="regElements">
    </div>
    <div class="form_register_row">
        <label for="Address"><b>Lakcím</b></label>
        <input type="text" name="address" placeholder="Lakcím" class="regElements">
    </div>
    <div class="form_register_row">
        <label for="phone_number"><b>Telefonszám</b></label>
        <input type="text" name="phone_number" placeholder="Telefonszám" class="regElements">
    </div>
    <div class="form_register_row">
        <label for="email"><b>E-mail</b></label>
        <input type="email" name="email" placeholder="Email cím" class="regElements">
    </div>
    <div class="form_register_row">
        <label for="password"><b>Jelszó</b></label>
        <input type="password" name="password" placeholder="Jelszó" value="" class="regElements">
    </div>
    <div class="form_register_row">
        <label for="password_confirm"><b>Jelszó ismét</b></label>
        <input type="password" name="password_confirm" placeholder="Jelszó" value="" class="regElements">
    </div>
    <div class="form_register_row">
        <input type="submit" name="register" value="Regisztráció" class="regButton">
    </div>
</form>
<div>