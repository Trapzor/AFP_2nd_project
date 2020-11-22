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

<form method="post" class="form_register">
    <div class="form_register_row">
        <label for="name">Név</label>
        <input type="text" name="name" placeholder="Név">
    </div>
    <div class="form_register_row">
        <label for="Address">Lakcím</label>
        <input type="text" name="address" placeholder="Lakcím">
    </div>
    <div class="form_register_row">
        <label for="phone_number">Telefonszám</label>
        <input type="text" name="phone_number" placeholder="Telefonszám">
    </div>
    <div class="form_register_row">
        <label for="email">Email cím</label>
        <input type="email" name="email" placeholder="Email cím">
    </div>
    <div class="form_register_row">
        <label for="password">Jelszó</label>
        <input type="password" name="password" placeholder="Jelszó" value="">
    </div>
    <div class="form_register_row">
        <label for="password_confirm">Jelszó ismét</label>
        <input type="password" name="password_confirm" placeholder="Jelszó" value="">
    </div>
    <div class="form_register_row">
        <input type="submit" name="register" value="Regisztráció">
    </div>
</form>