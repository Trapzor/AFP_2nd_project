<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['order'])) {
        $postData=[
            'name' => $_POST['nameinput'],
            'address' => $_POST['addressinput'],
            'email' => $_POST['emailinput'],
            'phone_number' => $_POST['phonenuminput'],
        ];
        if ($postData['name'] == null || $postData['address'] == null || $postData['email'] == null || $postData['phone_number'] == null) {
            echo("<script>alert('A *-al jelölt mezők kitöltése kötelező!');</script>");
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
                header("Location: index.php?p=rateservice");
            } else {
                echo "<script>alert('Hiba a rendeléskor!');</script>";
            }
        }
    }
?>

<form method="post">
    <div class="regContainer">       
        <h2>Rendelési adatok megadása</h2>   
        <h6>a *-gal jelölt mezők kitöltése kötelező</h6> 
            <label for="nameinput">Név*: </label>
            <input class="regElements" type="text" name="nameinput" value="<?=IsUserLoggedIn() ? $_SESSION['name'] : ""?>">    
            <label for="addressinput">Szállítási cím*: </label>
            <input class="regElements" type="text" name="addressinput" value="<?=IsUserLoggedIn() ? $_SESSION['address'] : ""?>">
            <label for="emailinput">Email cím*: </label>
            <input class="regElements" type="email" name="emailinput" value="<?=IsUserLoggedIn() ? $_SESSION['email'] : ""?>">             
            <label for="phonenuminput">Telefonszám*: </label>
            <input class="regElements" type="text" name="phonenuminput" value="<?=IsUserLoggedIn() ? $_SESSION['phone_number'] : ""?>">  
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
        <button class="regButton" name="order">Megrendelés</button>
    </div>
</form>