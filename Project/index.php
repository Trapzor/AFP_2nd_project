<?php
session_start();
require_once 'backend/userManager.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nomad's Webshop</title>
    <link rel="stylesheet" href="frontend/style.css " type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="frontend/script.js"></script>
</head>
<body>
    <div>
        <header><?php include_once 'backend/header.php'; ?></header>
        <nav><?php require_once 'backend/nav.php'; ?></nav>
        <content><?php require_once 'backend/routing.php'; ?></content>
        <footer><?php include_once 'backend/footer.php'; ?></footer>
    </div>
</body>
</html>