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

<div class="regContainer">
<form class="login_form" method="post">   
        <label for="userEmail">Email cím</label>
        <input type="email" name="userEmail" id="userEmail" placeholder="Email cím" class="regElements"> 
        <label for="userPassword">Jelszó</label>
        <input type="password" name="userPassword" id="userPassword" placeholder="Jelszó" value="" class="regElements">        
        <input type="submit" name="loginSubmit" value="Bejelentkezés" class="regButton">
</form>

    <small>Nincs fiókja? <a href="index.php?p=register">Regisztráljon</a> egyet.</small>

</div>