<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['loginSubmit'])) {
  $postData = [
    'email' => $_POST['userEmail'],
    'password' => $_POST['userPassword']
  ];

  if (empty($postData['email']) || empty($postData['password'])) {
    echo "Hiányzó adat(ok)!";
  } else if (!UserLogin($postData['email'], $postData['password'])) {
    echo "Hibás felhasználónév vagy jelszó!";
  }

  $postData['password'] = "";
}
?>

<form class="login_form" method="post">
    <div class="form_login_row">
        <label for="userEmail">Email cím</label>
        <input type="email" name="userEmail" id="userEmail" placeholder="Email cím">
    </div>
    <div class="form_login_row">
        <label for="userPassword">Jelszó</label>
        <input type="password" name="userPassword" id="userPassword" placeholder="Jelszó" value="">
    </div>
    <div class="form_login_row">
        <input class="btnSubmit" type="submit" name="loginSubmit" value="Bejelentkezés">
    </div>
</form>
<div class="login_info">
    <small>Nincs fiókja? <a href="#">Regisztráljon</a> egyet.</small>
</div>