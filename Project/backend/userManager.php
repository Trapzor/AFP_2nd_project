<?php
function IsUserLoggedIn() {
    return $_SESSION != null && array_key_exists('uid', $_SESSION) && is_numeric($_SESSION['uid']);
}

function UserLogout() {
    session_unset();
    session_destroy();
    header('Location: index.php');
}

function UserLogin($email, $password) {
    $query = "SELECT id, name, address, phone_number, email, password, permission FROM users WHERE email = :email AND password = :password";
    $params = [
        ':email' => $email,
        ':password' => sha1($password)
    ];

    require_once 'backend/dbFunctions.php';
    $record = getRecord($query, $params);
    if (!empty($record)) {
        $_SESSION['uid'] = $record['id'];
        $_SESSION['name'] = $record['name'];
        $_SESSION['address'] = $record['address'];
        $_SESSION['phone_number'] = $record['phone_number'];
        $_SESSION['email'] = $record['email'];
        $_SESSION['permission'] = $record['permission'];

        header('Location: index.php');
    }
    return false;
}

function UserRegister($email, $password, $name, $address, $phone_number) {
    $query = "SELECT id FROM users email = :email";
    $params = [ ':email' => $email ];

    require_once 'backend/dbFunctions.php';
    $record = getRecord($query, $params);
    if (empty($record)) {
        $query = "INSERT INTO users (name, address, phone_number, email, password) VALUES (:name, :address, :phone_number, :email, :password)";
        $params = [
            ':name' => $name,
            ':address' => $address,
            ':phone_number' => $phone_number,
            ':email' => $email,
            ':password' => sha1($password)
        ];

        if (executeDML($query, $params))
            header('Location: index.php?P=login');
    }
    return false;
}

function UserRating($user_id, $product_id, $rating_value, $rating_description){
    $query = "SELECT rating_value FROM rating WHERE user_id = :user_id AND product_id = :product_id";
    $params = [ ':user_id' => $user_id,
                ':product_id' => $product_id
    ];


    require_once 'backend/dbFunctions.php';

    $record = getRecord($query, $params);
    if (empty($record)) {
        $query = "INSERT INTO rating (product_id, user_id, rating_value, rating_description) VALUES (:product_id, :user_id, :rating_value, :rating_description)";
        $params = [
            ':product_id' => $product_id,
            ':user_id' => $user_id,
            ':rating_value' => $rating_value,
            ':rating_description' => $rating_description
        ];

        if (executeDML($query, $params))
            header("Location: index.php?p=show&s=".$product_id);
    }

}
?>