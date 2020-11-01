<center><h1>Funkcionális Specifikáció</h1></center>

* <h2>Áttekintés</h2>
    Az alkalmazásnak az elsődleges célja, hogy megkönnyítse az vásárlás folyamatát, mindenki számára.
    Épp ezért, mert mindenki a célközönsége az oldalnak teljesen felhasználóbarátnak kell lennie, hogy mindenki tudja használni. (a hátrányos helyzetűek is)
    Kategóriákra bontott termékek közül válogathat a felhasználó, és behelyezheti a virtuális kosarába / ki is veheti onnan -> meg is rendelheti őket.
    Az oldalon regisztráció szükséges, azért, hogy könnyebbé tegye a felhasználók dolgát az oldalon, például megrendelésnél automatikusan kitölti a felhasználó adatait.

    A funkciók áttekintve:

    Regisztráció

    Kosár rendszer

    Hátrányban lévő emberek segítése

    Evidens, letisztult design
    
    Érintkezésmentes házhozszállítás támogatása


* <h2>Jelenlegi helyzet</h2>

    Manapság az emberek nagy része offline módon vásárol ami lassú, stresszes.
    Arról nem is beszélve, hogy egyes településeken az elérhető termékek száma igen limitált. 
    (pl: Egy faluban nem tudsz lemenni a boltba venni egy számítógépet)
    A raktárkészlet problémája is adott, ami azt jelenti, hogy nem mindig van raktáron az a bizonyos termék amire szüksége van a vásárlónak.
    Az emberek kisebb része pedig **online** vásárol, ami a jelenlegi világban igen lassú, körülményes 
    (nem letisztult, lassú webshopok)
    

* <h2>Követelménylista</h2>

    ID | Név | Kifejtés
    -- | --- | --------
    K1 | Regisztráció | A felhasználó regisztrálni tud a webáruház oldalára. A regisztráció opcionális, de sok kényelmi funkciót tesz lehetővé.
    K2 | Bejelentkezés | Regisztráció után a felhasználó bejelentkezhet, ezáltal hozzáfér a további funkciókhoz.
    K3 | Termékek hozzáadása | A felhasználók hozzáadhatják saját termékeiket a webáruházhoz, rendelhetnek hozzájuk képeket, leírásokat.
    K4 | Termékek törlése | A téves információkat tartalmazó termékeket a felhasználó képes lesz törölni.
    K5 | Virtuális kosár | A webáruház biztosít egy virtuális kosarat, amelybe a kívánt termékeket be lehet pakolni.
    K6 | Termék keresés | Különböző szűrőkkel és szöveges keresővel tud a felhasználó keresni.
    K7 | Akadálymentesítés | A webáruház segíti a hátrányos helyzetű felhasználókat.
    K8 | Termékek elmentése | A felhasználó képes elmenteni egy számára szimpatikus terméket, hogy később ne kelljen újra megkeresni.
    K9 | Értékelési felület | Regisztrált felhasználóink tudják értékelni a termékeket és a szolgáltatásokat, valamint szöveges megjegyzést is tehetnek.
    K10 | Felhasználói fiók módosítása | A bejelentkezett felhasználó képes az adatait módosítani.
    K11 | Felhasználó törlése | A webáruházból törlésre kerül a felhasználó minden adata.


* <h2>Jelenlegi üzleti folyamatok modellje</h2>

    ![Image](https://github.com/unicsbalint/AFP_2nd_project/blob/master/Pictures/Jelenlegi_uzleti_folyamat_modell.png)

* <h2>Igényelt üzleti folyamatok modellje</h2>

    ![Image](https://github.com/unicsbalint/AFP_2nd_project/blob/master/Pictures/Igenyelt_uzleti_folyamat_modell.png)

* <h2>Használati esetek</h2>

    - **Regisztrált felhasználó**: A regisztrált felhasználó képes rendelni a webáruházból, rendeléskor a fiókjában megadott adatok automatikusan kitöltésre kerülnek. Meg tudja változtatni a saját adatait, képes elmenteni a megtetszett termékeket és később megvásárolni azokat és értékelni tudja a webáruház termékeit, szolgáltatásait.

    - **Admin felhasználó**: Az admin felhasználó látja a felhasználók által küldött hibajelentéseket, felelős a termékek hozzáadásáért és a webáruház megfelelő működéséért.

* <h2>Képernyő tervek</h2>

    - **Főoldal**:

    ![Image](https://github.com/unicsbalint/AFP_2nd_project/blob/master/Pictures/Screen_design_Home.png)

* <h2>Forgatókönyv</h2>
    Zolinak megtetszik egy termék a szomszéd városban, ám nincs nála pénz, ezért hazamegy érte. Mire visszaér a terméket valaki más már megvásárolta, ezzel Zoli elpazarolt
    2 órát az életéből, kifizette az utazási költséget, és még a terméket sem kapta meg. Amint hazaért felment az internetre, és megrendelte ugyan azt a terméket a weboldalunkon, ami másnapra meg is                                  jött , a termék megkeresése, a regisztráció nem telt többe 10 percnél, a kiszállítási díj is olcsóbb volt mint az utiköltsége, illetve érintésmentes átvételt kért, ezért még járványügyileg is teljesen biztonságos volt.

* <h2>Funkció - követelmény megfeleltetés</h2>

 <h2>Fogalomszótár</h2>
PHP: 	Egy programozási nyelv, ami általában egy webszerveren kerül feldolgozásra.
HTML:	Egy dokumentum, ami arra van tervezve, hogy egy webböngésző jelenítse meg.
CSS: 	Egy dokumentum ami befolyásolja a weboldal dizájn elemeit.
JavaScript: Egy programozási nyelv ami által komplex funkciókat implementáljunk weboldalakon. - ha a weboldal dinamikus működést tanusít, akkor nagy a valószínűsége, hogy van benne JavaScript -


