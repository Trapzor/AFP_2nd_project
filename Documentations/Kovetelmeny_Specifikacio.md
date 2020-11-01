<center><h1>Követelmény Specifikáció</h1></center>

* <h2>Áttekintés</h2>

    Az alkalmazás célja egy olyan webáruház létrehozása, melyben a felhasználó kényelmesen válogathat
    a kínálatból, megtekintheti azok részletes tulajdonságait. A termékek kategóriákra vannak bontva.
    A felhasználó a kiválaszott termékeket virtuális kosárba rakhatja, ezeket tudja módosítani,
    majd megrendelheti azokat. Lesz lehetőség regisztrálásra és bejelentkezésre. Ha a felhasználó
    bejelentkezett állapotban van, akkor a megrendeléskor az adatai automatikusan ki lesznek töltve.

* <h2>Jelenlegi helyzet</h2>

    Az emberek nagyobb része az üzletekben személyesen vásárol. A vásárlással rengeteg idő elmegy
    (elmenni az üzletbe, kikeresni a termékeket, beállni a sorba). Az üzletek nem találhatók meg
    minden városban és csak a nap egy adott időszakában vannak nyitva. Az üzletekben kevesebb a választási
    lehetőség mint egy webáruházban. Termékek nem mindig vannak készleten és a vásárló csak akkor értesül
    erről, ha már az üzletben van. 

* <h2>Vágyálom rendszer</h2>

    A projekt célja egy olyan internetes webáruház létrehozása, 
    ahol a felhasználó egyszerűen tud válogatni a hirdetett termékek és 
    szolgáltatások sokaságából. Ezek kategóriákra vannak bontva emiatt a 
    vásárlás könnyebb, mint valaha. A kategóriák mellett lehet márkára,
    részletes tulajdonságokra és árkategóriára is szűrni. A rendszer 
    mivel webes felületen van megvalósítva elérhető minden 
    internetkapcsolatra képes készülékről. Regisztráció nélkül is 
    lehetséges böngészni az áruházat, viszont a regisztráció kötelező a 
    rendeléshez, valamit további kényelmi funkciókat biztosít a megfelelő 
    felhasználói élmény eléréséhez. A webáruház teljes mértékben 
    akadálymentesített ezzel a hátrányos helyzetű felhasználóinkat tudjuk 
    segíteni. A bejelentkezést követően a virtuális kosárba össze tudjuk 
    válogatni a megtetszett javakat ezt az áruházunk elmenti, hogy ha az 
    adott pillanatban nem is szeretnénk magunkat elkötelezni a vásárlás 
    mellett, később ne kelljen újra keresgélni. Vásárlás után 
    lehetőségünk lesz a termékek és szolgáltatások értékelésére, egy 
    1-5ig tartó skálán és további pár soros vélemény kifejtésre is. 
    Felhasználói fiókunkat nem csak vásárlásra használhatunk, hanem akár 
    mi is lehetünk eladók az oldalon. Ez esetben lehetőségünk lesz 
    csatolni a hirdetéshez egy rövid leírást és képet is. Minden 
    felhasználó rendelkezik az alap fiókadatok módosításának 
    lehetőségévél: Például: email cím, jelszó, valamint szállítási és 
    számlázási cím megváltoztatással. Lehetőség van a felhasználói fiók 
    törlésére is. Ilyenkor minden tárolt adatok törlünk a felhasználóval 
    kapcsolatban.
    
* <h2>Funkcionális követelmények</h2>

    - A felhasználó adatainak eltárolása
    - A termékek adatainak eltárolása
    - A felhasználók tudják értékelni a webáruház termékeit és szolgáltatásait
    - A termékek között tudunk keresni szövegesen, vagy szűrni kategóriák vagy részletes tulajdonságok alapján
    - A termékeket kosárba tudjuk helyezni

* <h2>Rendszerre vonatkozó törvények, szabványok, ajánlások</h2>

    - **GDPR**: A személyes adatok kezeléséről szóló rendelet
    - **A fogyasztóvédelemről szóló 1997. évi CLV. törvény (Fgytv.)**
    -  Az elektronikus hírközlésről szóló 2003. évi C. törvény, az elektronikus kereskedelmi szolgáltatások, az információs társadalommal összefüggő szolgáltatások egyes kérdéseiről szóló 2001. évi          CVIII. törvény **(Cookie figyelmeztetés)** 

* <h2>Jelenlegi üzleti folyamatok modellje</h2>
    
    ![Image](https://github.com/unicsbalint/AFP_2nd_project/blob/master/Pictures/Jelenlegi_uzleti_folyamat_modell.png)

* <h2>Igényelt üzleti folyamatok</h2>

    ![Image](https://github.com/unicsbalint/AFP_2nd_project/blob/master/Pictures/Igenyelt_uzleti_folyamat_modell.png)

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

* <h2>Riportok</h2>

* <h2>Fogalomtár</h2>

    - **Cookie**: A felhasználó eszközén tárolt információ, mely a webszerver és webböngésző közötti kommunikációban használatos.