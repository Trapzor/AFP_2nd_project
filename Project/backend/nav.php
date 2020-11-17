<?php 
if (empty($_GET['p']))
    $_GET['p'] = 'home';
?>

<div class="navbutton <?=$_GET['p']=='home'?"active":""?>">
    <a href="index.php?p=home"><i class="fa fa-home"></i> Főoldal</a>
</div>
<div class="navbutton <?=$_GET['p']=='browse'?"active":""?>">
    <a href="index.php?p=browse"><i class="fa fa-bars"></i> Termékeink</a>
</div>
<div class="navbutton <?=$_GET['p']=='favorites'?"active":""?>">
    <a href="index.php?p=favorites"><i class="fa fa-heart"></i> Kedvencek</a>
</div>
<div class="navbutton <?=$_GET['p']=='cart'?"active":""?>">
    <a href="index.php?p=cart"><i class="fa fa-shopping-cart"></i> Kosár</a>
</div>