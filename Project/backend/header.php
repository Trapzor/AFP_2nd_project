 <div>   
    <a href="index.php"><img src="frontend/pictures/nomads_logo.png" alt="our logo" class="nomads_logo"></a>
<div class="userInfo">
    <?php if (!IsUserLoggedIn()): ?>
        <a href="index.php?p=login">
    <div class="loginButton">
        <i class="fa fa-user-circle-o"></i> Bejelentkezés
    </div>
    </a>
    <?php else: ?>
        <div class="user_panel">
            <div class="alignUsername"><i class="fa fa-user-circle-o"></i> <?=$_SESSION['name']; ?></div>
            <hr/>
            <div class="modify_button"><a href="index.php?p=profile"><i class="fa fa-gear"></i> Fiókadatok módosítása</a></div>
            <div class="logout_button"><a href="index.php?p=logout"><i class="fa fa-power-off"></i> Kijelentkezés</a></div>
        </div>
    <?php endif; ?>
</div>
</div>