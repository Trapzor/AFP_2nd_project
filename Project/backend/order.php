<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['order'])) {
        $postData=[
            'name' => $_POST['nameinput'],
            'address' => $_POST['addressinput'],
            'email' => $_POST['emailinput'],
            'phone_number' => $_POST['phonenuminput'],
        ];
        if ($postData['name'] == null || $postData['address'] == null || $postData['email'] == null || $postData['phone_number'] == null) {
            echo("A *-gal jelölt mezők kitöltése kötelező!");
        }
        else {
            if (IsUserLoggedIn()){
                $query = "DELETE FROM shopping_cart WHERE user_id=:uid";
                $params=[
                    ':uid' => $_SESSION['uid']
                ];
            }
            else {
                $query = "DELETE FROM shopping_cart WHERE user_id=:uid";
                $params = [
                    ':uid' => 0
                ];
            }
            require_once "backend/dbFunctions.php";
            if (executeDML($query, $params)) {
                header("Location: index.php?p=cart");
            } else {
                echo "<script>alert('Hiba a rendeléskor!');</script>";
            }
        }
    }
?>

<form method="post">
    <div class="orderPage">
        <h5>A *-gal jelölt mezők kitöltése kötelező</h5>
        <h2>Rendelési adatok megadása*</h2>
        <div id="inputdata">
            <label for="nameinput">Név*: </label>
            <br>
            <input type="text" name="nameinput" value="<?=IsUserLoggedIn() ? $_SESSION['name'] : ""?>">
        </div>
        <div id="inputdata">
            <label for="addressinput">Szállítási cím*: </label>
            <br>
            <input type="text" name="addressinput" value="<?=IsUserLoggedIn() ? $_SESSION['address'] : ""?>">
        </div>
        <div id="inputdata">
            <label for="emailinput">Email cím*: </label>
            <br>
            <input type="email" name="emailinput" value="<?=IsUserLoggedIn() ? $_SESSION['email'] : ""?>">
        </div>
        <div id="inputdata">
            <label for="phonenuminput">Telefonszám*: </label>
            <br>
            <input type="text" name="phonenuminput" value="<?=IsUserLoggedIn() ? $_SESSION['phone_number'] : ""?>">
        </div>
        <br>
        <hr>
        <br>
        <h2>Fizetési mód megadása*</h2>
        <div id="inputpaymentmethod">
            <input type="radio" name="paymentmethod" value=1 required>Utánvétes fizetés</input>
            <input type="radio" name="paymentmethod" value=2 required>Bankártyás utalás</input>
        </div>
        <br>
        <hr>
        <br>
        <button name="order">Megrendelés</button>
    </div>
</form>