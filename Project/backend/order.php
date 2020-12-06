<div class="orderPage">
    <h5>A *-gal jelölt mezők kitöltése kötelező</h5>
    <h2>Rendelési adatok megadása*</h2>
    <div id="inputdata">
        <label for="nameinput">Név*: </label>
        <br>
        <input type="text" name="nameinput" value="<?=IsUserLoggedIn() ? $_SESSION['name'] : ""?>">
    </div>
    <div id="inputdata">
        <label for="addressinput">Szállítási cím*: </label>
        <br>
        <input type="text" name="addressinput" value="<?=IsUserLoggedIn() ? $_SESSION['address'] : ""?>">
    </div>
    <div id="inputdata">
        <label for="emailinput">Email cím*: </label>
        <br>
        <input type="email" name="emailinput" value="<?=IsUserLoggedIn() ? $_SESSION['email'] : ""?>">
    </div>
    <div id="inputdata">
        <label for="phonenuminput">Telefonszám*: </label>
        <br>
        <input type="text" name="phonenuminput" value="<?=IsUserLoggedIn() ? $_SESSION['phone_number'] : ""?>">
    </div>
    <br>
    <hr>
    <br>
    <h2>Fizetési mód megadása*</h2>
    <div id="inputpaymentmethod">
        <input type="radio">Utánvétes fizetés</input>
        <input type="radio">Bankártyás utalás</input>
    </div>
    <br>
    <hr>
    <br>
    <a href="index.php"><button>Megrendelés</button></a>
</div>