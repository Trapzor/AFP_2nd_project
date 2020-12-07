<div class="home">
    <div>
    <?php if (!IsUserLoggedIn()): ?>
<h2> Üdvözöljük a Nomad's webshopban!</h2> <br>
 Kérem ha még nem tette <a href="index.php?p=register">regisztráljon </a>, hogy oldalunkat kényelmesen vehesse igénybe! <br>
 Ha már regisztrált <a href="index.php?p=login" >jelentkezzen be </a>!
    <?php else: ?>
<h2> Üdvözöljük <?php echo $_SESSION['name']; ?> </h2>
Hogy vagyunk ma? <br> Nézze meg kedvenceit, már várják gazdájukat, rendeljen most!
    <?php endif; ?>

    <br><br><br>
<h3>Miért minket válasszon?</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ad, temporibus explicabo optio <br>
 consequatur consequuntur magnam odio, aperiam dolore, quo saepe quae. Totam quia quae odit velit ipsum? Corporis, cum?
 Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos atque praesentium beatae porro libero enim iure consequatur facere!
 <br> Expedita sint sequi doloribus molestiae voluptatibus est nisi voluptatum. Dicta, unde odio?</p>

 <h3>Más felhasználók véleménye:</h3>
 
    </div>
</div>

