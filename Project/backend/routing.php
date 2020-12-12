<?php
if (!array_key_exists('p', $_GET) || empty($_GET['p']))
    $_GET['p'] = 'home';

switch ($_GET['p']) {
    case 'home': require_once 'backend/home.php'; break;
    case 'browse': require_once 'backend/products/browse.php'; break;
    case 'favorites': require_once 'backend/favorites.php'; break;
    case 'cart': require_once 'backend/cart.php'; break;
    case 'show': require_once 'backend/products/show.php'; break;
    case 'order': require_once 'backend/order.php'; break;
    case 'add': IsUserLoggedIn() && $_SESSION['permission'] > 0 ? require_once 'backend/products/add.php' : header('Location: index.php'); break;
    
    case 'login': !IsUserLoggedIn() ? require_once 'backend/user/login.php' : header('Location: index.php'); break;
    case 'register': !IsUserLoggedIn() ? require_once 'backend/user/register.php' : header('Location: index.php'); break;
    case 'profile': IsUserLoggedIn() ? require_once 'backend/user/profile.php' : header('Location: index.php'); break;
    case 'rate': IsUserLoggedIn() ? require_once 'backend/products/rating.php' : header('Location: index.php'); break;
    case 'listrate': IsUserLoggedIn() ? require_once 'backend/products/list.php' : header('Location: index.php'); break;
    case 'report' : IsUserLoggedIn() ? require_once 'backend/user/bugreport.php' : header('Location: index.php'); break;
    case 'logout': IsUserLoggedIn() ? UserLogout() : header('Location: index.php'); break;
}
?>