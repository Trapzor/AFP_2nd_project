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
        echo "Hiányzó adat(ok)!";
    } else if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Hibás email formátum!";
    } else if ($postData['password'] != $postData['password1']) {
        echo "A jelszavak nem egyeznek!";
    } else if (strlen($postData['password']) < 8) {
        echo "A jelszó túl rövid! Legalább 8 karakter hosszúnak kell lennie!";
    } else if (!UserRegister($postData['email'], $postData['password'], $postData['name'], $postData['address'], $postData['phone_number'])) {
        echo "Sikertelen regisztráció!";
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
        <label for="email"><b>Email cím</b></label>
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