**Tesztelő: Horváth Péter**

**Tesztelés dátuma: 2020. 12. 14.**

Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés
----------|--------------|---------------|----------|-------------
01 | Regisztráció a főoldalon lévő linkről | Regisztrációs oldal betöltése | A regisztrációs oldal betöltött | A link megfelelően működik
02 | Regisztráció üres mezőkkel | Az oldal hibát dob, a regisztráció meghiúsul | A oldal "Hiányzó adatok" hibaüzenettel tért vissza, a regisztráció nem történt meg | A funkció megfelelően működik
03 | Bejelentkezés üres mezőkkel | Az oldal nem jelentkezteti be a felhasználót | A oldal "Hiányzó adatok" hibaüzenettel tért vissza, a bejelentkezés sikertelen | A funkció megfelelően működik
04 | Bejelentkezés regisztrált fiókba helyes adatokkal | A weboldal bejelentkeztet, a főoldal első sorának szövege megváltozik | Sikeres bejelentkezés, a főoldal köszöntőszövege megjelent| Nem találtam problémát
05 | Felhasználó nevének módosítása | Frissül a felhasználó adata | A weboldal kijelentkeztet, bejelentkezés után a név megváltozott | A funkció megfelelően működik
06 | Termék törlése nem megfelelő jogosultsági szinttel | A felhasználó nem képes törölni terméket, amennyiben nincs hozzá jogosultsága | A felhasználó számára nem jelent meg a törlés gomb | Nem találtam problémát
07 | Termék értékelése | A felhasználó értékelést tud adni egy termékre amely küldéskor bekerül az adatbázisba | Az oldal hibát dobott, de az értékelés bekerült az adatbázisba | A funkció javításra szorul
08 | Termék kosárba helyezése nem bejelentkezett felhasználóként | A termék bekerül a kosárba | A termék megtalálható a kosárban | Nem találtam problémát
09 | Megrendelés nem bejelentkezett felhasználóként | A rendelési oldal betölt, de az adatok nem kerülnek kitöltésre | Megnyílt a rendelési oldal a mezők üresen maradtak | A funkció megfelelően működik
10 | Szolgáltatások értékelése | A rendelés leadása után megnyílik az értékelés oldal, ahol értékelhetjük az oldal által nyújtott szolgáltatásokat | Megnyílt az oldal | Nem találtam problémát
11 | Üres értékelés elküldése | Az oldal nem engedi, hogy értékelést üresen küldjünk el | Az oldal nem engedte elküldeni az értékelést, de hibát dobott | A funkció javításra szorul
12 | Értékelés kihagyása | Az értékelés kihagyása gombra kattintva visszakerülünk a főoldalra | Sikeresen kihagytuk az értékelést, visszakerültünk a főoldalra | A funkció megfelelően működik
13 | Hibajelentés küldése | A hibajelentés elküldésre kerül és eltárolódik az adatbázisban | A hibajelentés bekerült az adatbázisba | Nem találtam problémát