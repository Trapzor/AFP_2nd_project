<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['rating_button'])) {
        $postData = [
            'rating' => $_POST['rating'],
            'rate_description' => $_POST['rate_description'],
        ];
    
        if (empty($postData['rating'])) {
            echo "<script>alert('Értékelés küldésekor kötelező az értékelést megadni!');</script>";
        } else if (strlen($postData['rate_description']) > 250) {
            echo "<script>alert('A leírás max 249 karakter lehet!');</script>";
        } else {
            $query = "INSERT INTO rating (product_id, user_id, rating_value, rating_description) VALUES (:product_id, :user_id, :rating_value, :rating_description)";
            $params = [
                ':product_id' => 99,
                ':user_id' => IsUserLoggedIn() ? $_SESSION['id'] : 0,
                ':rating_value' => $_POST['rating'],
                ':rating_description' => empty($_POST['rate_description']) ? $_POST['rate_description'] : ""
            ];
            require_once "backend/dbFunctions.php";
            if(!executeDML($query, $params)){
                echo "<script>alert('Hiba az értékelés során');</script>";
            } else {
                header('Location: index.php');
            }
        }
    
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['skip_button'])) {
        header('Location: index.php');
    }
?>

<br>
<div class="successfulOrder">
    <h5>Sikeres megrendelés! A szállítás részleteit hamarosan elküldjük.</h5>
</div>
<div class="ratingContainer">
<h2>Köszönjük, hogy minket választott!</h2>
<br>
<h3>Kérjük, értékelje a szolgáltatásainkat!</h3>
<form method="post" class="form_rating">
    <div class="form_rating_row">
        <label for="rate"><b>Értékelés</b></label>
        <input type="radio" name="rating" value="1">1
        <input type="radio" name="rating" value="2">2
        <input type="radio" name="rating" value="3">3
        <input type="radio" name="rating" value="4">4
        <input type="radio" name="rating" value="5">5
    </div>
    <br>
    <div class="form_rating_row">
        <label for="description"><b>Értékelés leírás</b></label>
        <input type="text" name="rate_description" placeholder="Leírás" class="rateElements">
    </div>
    <div class="form_rating_row">
        <input type="submit" name="rating_button" value="Értékelés küldése" class="rateButton">
    </div>
    <div>
        <input type="submit" id="skip_button" name="skip_button" value="Értékelés kihagyása">
    </div>
</form>
<div>