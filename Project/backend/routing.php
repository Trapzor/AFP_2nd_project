<?php
if (!array_key_exists('p', $_GET) || empty($_GET['p']))
    $_GET['p'] = 'home';

switch ($_GET['p']) {
    case 'home': require_once 'backend/home.php'; break;
    case 'browse': require_once 'backend/products/browse.php'; break;
    case 'favorites': require_once 'backend/favorites.php'; break;
    case 'cart': require_once 'backend/cart.php'; break;
    case 'show': require_once 'backend/products/show.php'; break;
    
    case 'login': require_once 'backend/user/login.php'; break;
    case 'register': require_once 'backend/user/register.php'; break;
    case 'logout': IsUserLoggedIn() ? UserLogout() : header('Location: index.php'); break;
}
?>