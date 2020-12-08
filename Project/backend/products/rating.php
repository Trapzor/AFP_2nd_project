<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['rating_button'])) {
    $postData = [
        'rating' => $_POST['rating'],
        'rate_description' => $_POST['rate_description'],
    ];

    if (empty($postData['rating']) || empty($postData['rate_description'])) {
        echo "<script>alert('Hiányzó adatok!');</script>";
    } else if (strlen($postData['rate_description']) > 250) {
        echo "<script>alert('A leírás max 249 karakter lehet!');</script>";
    } else if (!UserRating($_GET['s'], $_SESSION['uid'], $postData['rating'], $postData['rate_description'])) {
        echo "<script>alert('Sikertelen értékelés!');</script>";
    }

}
?>
<div class="ratingContainer">
<form method="post" class="form_rating">
    <div class="form_rating_row">
        <label for="rate"><b>Értékelés</b></label>
        <input type="radio" name="rating" value="1">
        <input type="radio" name="rating" value="2">
        <input type="radio" name="rating" value="3">
        <input type="radio" name="rating" value="4">
        <input type="radio" name="rating" value="5">
    </div>
    <div class="form_rating_row">
        <label for="description"><b>Értékelés leírás</b></label>
        <input type="text" name="rate_description" placeholder="Leírás" class="rateElements">
    </div>
    <div class="form_rating_row">
        <input type="submit" name="rating_button" value="Értékelés küldése" class="rateButton">
    </div>
</form>
<div>