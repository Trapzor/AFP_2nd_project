<?php 
if (empty($_GET['p']))
    $_GET['p'] = 'home';
?>

<div class="navbutton <?=$_GET['p']=='home'?"active":""?>">
    <a href="index.php?p=home">Főoldal</a>
</div>
<div class="navbutton <?=$_GET['p']=='browse'?"active":""?>">
    <a href="index.php?p=browse">Termékeink</a>
</div>
<div class="navbutton <?=$_GET['p']=='favorites'?"active":""?>">
    <a href="index.php?p=favorites">Kedvencek</a>
</div>
<div class="navbutton <?=$_GET['p']=='cart'?"active":""?>">
    <a href="index.php?p=cart">Kosár</a>
</div>