<img src="frontend/nomads_logo.png" alt="our logo" class="nomads_logo">
<div class="userInfo">
    <?php if (!IsUserLoggedIn()): ?>
        <i class="fa fa-user-circle-o"></i> <a href="index.php?p=login">Bejelentkezés</a>
    <?php else: ?>
        <i class="fa fa-user-circle-o"></i> <?=$_SESSION['name']; ?>
    <?php endif; ?>
</div>