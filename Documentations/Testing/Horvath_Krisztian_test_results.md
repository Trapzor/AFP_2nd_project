**Tesztelő: Horváth Krisztián**

**Tesztelés dátuma: 2020.12.14.**

Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés
----------|--------------|---------------|----------|-----------
01 | Regisztráció hibásan beírt adatokkal | A rendszer nem regisztrálja a felhasználót, és figyelmezteti a felhasználót | A rendszer kiírta, hogy hibásan megadott adatok és nem regisztrálta a felhasználót | Nem találtam problémát
02 | Bejelentkezés nem létező felhasználói fiókkal | A rendszer nem jelentkezteti be a felhasználót | A rendszer nem jelentkeztette be a felhasználót és kiírta, hogy hibás felhasználónév vagy jelszó | Nem találtam problémát
03 | Felhasználói fiók lakcím adatának módosítása | A felhasználói fiókhoz tartozó lakcím megváltozik | A rendszer kijelentkezteti a felhasználót, majd újbóli bejelentkezés után a lakcím megváltozott | Nem találtam problémát
04 | Termék megtekintése | A termékhez tartozó adatok megjelennek | A termék adatai megjelennek | Nem találtam problémát
05 | Termék hozzáadása a kedvencekhez | A termék megjelenik a felhasználó kedvencek listájában | A termék megjelent a felhasználó kedvencek listájában | Nem találtam problémát
06 | Termék hozzáadása nem megfelelő jogosultsággal | A nem megfelelő jogosultsággal rendelkező felhasználó nem tud új terméket hozzáadni | A nem megfelelő jogosultsággal rendelkező felhasználónak nem jelenik meg a termék hozzáadása gomb, így nem tud új terméket hozzáadni | Nem találtam problémát
07 | Termék hozzáadásakor a kép feltöltése | A termék hozzáadásakor a kép feltöltődik | A termék hozzáadásakor a kép feltöltődött | Nem találtam problémát
08 | Termék kosárba helyezése | A termék belekerül a felhasználó kosarába | A termék belekerült a felhasználó kosarába | Nem találtam problémát
09 | Termék törlése a kosárból | A termék törlődik a felhasználó kosarából | A termék törlődött a felhasználó kosarából | Nem találtam problémát
10 | A termék megrendelésekor adatok kitöltése | A megrendeléskor a bejelentkezett felhasználó adatai automatikusan kitöltődnek a megfelelő helyre | Megrendeléskor a felhasználó adatai automatikusan kitöltésre kerültek | Nem találtam problémát