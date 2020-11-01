<center><h1>Rendszerterv</h1></center>

* <h2>Rendszer célja</h2>

    A rendszer célja egy olyan weboldal létrehozása, amelyben a felhasználó tud vásárolni a termékek közül. A felhasználó tud szűrni a termékek közül, értékelni tudja a termék minőségét és a weboldal szolgáltatásait. A weboldal akadálymentesített, ezért minden felhasználó könnyedén tudja kezelni a felületet. Az ADMIN szerepkörrel rendelkező felhasználó felelős a termékek hozzáadásáért és a webáruház megfelelő működéséért. A webáruház rendelkezik egy virtuális kosárral, amelyben a felhasználó az általa kiválasztott termékeket tudja tárolni és megvásárolni. A webáruház minden internetkapcsolattal és webböngészővel rendelkező eszközön működik. 

* <h2>Projektterv</h2>

* <h2>Üzleti folyamatok modellje</h2>

    ![Image](https://github.com/unicsbalint/AFP_2nd_project/blob/master/Pictures/Igenyelt_uzleti_folyamat_modell.png)

* <h2>Követelmények</h2>

    * **Funkcionális követelmények:**

        - A felhasználó adatainak eltárolása
        - A termékek adatainak eltárolása
        - A felhasználói értékelések eltárolása
        - A termékek közötti keresés és szűrés megvalósítása
        - A termék kosárba helyezésének kialakítása
        - A vásárlás menetének kialakítása
    
    * **Nemfunkcionális követelmények:**

        - A felhasználók, más felhasználóknak csak a nevét és az értékelését látják
        - A rendszernek egyszerre több felhasználót kell kiszolgálnia
    
    * **Törvényi előírások, szabványok:**

        - A GDPR-ban foglaltak betartása

* <h2>Funkcionális terv</h2>

* <h2>Fizikai környezet</h2>

    Az alkalmazás web platformra készül, ezért minden internetkapcsolattal és webböngészővel rendelkező készüléken elérhető. Nincsenek megvásárolt software komponenseink. A fejlesztéshez használt eszközök:
    - Visual Studio Code
    - XAMPP
    - Notepad++
    - Git
    - Trello

* <h2>Absztrakt domain modell</h2>

* <h2>Architekturális terv</h2>

* <h2>Adatbázis terv</h2>

* <h2>Implementációs terv</h2>

    A webáruház felülete HTML, JavaScript nyelven készül. Az elemeket CSS fájlok segítségével dizájnoljuk. A termékek
    és a felhasználók tárolására szükség van adatbázisra is. A webáruház backend részét PHP nyelven valósítjuk meg. A fájlokat külön választjuk, az átláthatóság és az egyszerűbb bővítés érdekében.

* <h2>Tesztterv</h2>

* <h2>Telepítési terv</h2>

* <h2>Karbantartási terv</h2>

    A webáruház karbantartására időről időre sor fog kerülni illetve a lehető leghamarabb, amennyiben az oldal működését megnehezítő hibát
    találunk. A hibafelderítés meggyorsítása érdekében szeretnénk az oldalon egy 'Jelentés' gombot elhelyezni, mely megnyomásával, és a mezők kitöltésével a felhansználó küldhet visszajelzést, amennyiben egy funkció nem működik megfelelően.
    Ezeket a jelentéseket a fejlesztői csapat tagjai látni fogják, így hamar meg tudják kezdeni a hibák javítását.
    A hibajelentés elküldésekor két mezőt fogunk látni magunk előtt: Az egyikben a probléma rövid, párszavas megfogalmazása szükséges, ezen mező
    kitöltése kötelező, a másik mező a probléma részletesebb leírására szolgál mely kitöltése opcionális.