# MyGameVault

Tomáš Tóth

5ZYI32

## Stručný opis projektu
MyGameVault je webová aplikácia určená hráčom, ktorí si chcú na jednom mieste spravovať svoju hernú kolekciu, sledovať hry, ktoré chcú hrať alebo už dohrali, a ukladať si vlastné hodnotenia a recenzie. 
Aplikácia bude zároveň slúžiť ako katalóg hier, v ktorom bude možné hry vyhľadávať, filtrovať podľa žánru a platformy a zobrazovať ich podrobné informácie.

Používateľ si bude môcť vytvoriť vlastnú hernú knižnicu, pridávať do nej hry, označovať ich stavom (napr. chcem hrať, hrám alebo dohrané), vytvárať wishlist a pridávať vlastné recenzie. 
Súčasťou aplikácie bude aj správa obrázkov a screenshotov hier. Administrátorská časť umožní správu hier, žánrov, platforiem a používateľského obsahu. 
Cieľom projektu je vytvoriť prehľadnú webovú aplikáciu s dôrazom na jednoduchú správu hernej kolekcie a pohodlné objavovanie hier.

## Role v projekte
### Návštevník (Guest)
- Návštevník môže voľne prehliadať verejnú časť aplikácie bez vytvorenia účtu. Môže vyhľadávať a filtrovať hry, zobrazovať ich detailné informácie a čítať verejné recenzie. 
Nemôže si vytvárať vlastnú knižnicu, wishlist, pridávať hodnotenia ani písať recenzie.

### Registrovaný používateľ (User)
- Registrovaný používateľ má okrem funkcií dostupných neregistrovanému používateľovi aj možnosť spravovať vlastnú hernú knižnicu a wishlist. 
Môže meniť stav hier, pridávať hodnotenia a recenzie, nahrávať vlastné screenshoty a sledovať svoje herné štatistiky.

### Kurátor (Curator)
- Kurátor sa stará o obsah herného katalógu. Môže pridávať, upravovať a odstraňovať hry, žánre a platformy a spravovať informácie a obrázky patriace ku hrám. 
Nemá oprávnenia na správu používateľských účtov a systémových nastavení.

### Administrátor (Administrator)
- Administrátor má najvyššie oprávnenia v systéme. Spravuje používateľské účty a ich role, môže vykonávať administratívne operácie nad obsahom aplikácie a dohliada na správne fungovanie celého systému.

## Prípady použitia podľa rolí
### Návštevník (Guest)
- Návštevník si prehliadne katalóg hier
- Návštevník vyhľadá hru podľa názvu
- Návštevník vyfiltruje hry podľa žánru, platformy alebo ďalších parametrov
- Návštevník si zobrazí detail vybranej hry
- Návštevník si prečíta hodnotenia a recenzie ostatných používateľov
- Návštevník si zobrazí dostupné žánre a platformy
- Návštevník si vytvorí používateľský účet alebo sa prihlási

### Registrovaný používateľ (User)
- Používateľ si pridá alebo odstráni hru z vlastnej knižnice
- Používateľ zmení stav hry vo svojej knižnici
- Používateľ si pridá alebo odstráni hru z wishlistu
- Používateľ ohodnotí hru
- Používateľ vytvorí, upraví alebo odstráni vlastnú recenziu na hru
- Používateľ nahrá screenshot ku hre
- Používateľ spravuje svoje nahrané screenshoty
- Používateľ si zobrazí svoje herné štatistiky
- Používateľ upraví údaje svojho profilu

### Kurátor (Curator)
- Kurátor pridá alebo odstráni hru z katalógu
- Kurátor upraví informácie o hre
- Kurátor pridá, upraví alebo odstráni žáner
- Kurátor pridá alebo odstráni platformu
- Kurátor pridá alebo upraví obrázky patriace ku hre
- Kurátor aktualizuje informácie v hernom katalógu

### Administrátor (Administrator)
- Administrátor zobrazí zoznam používateľov
- Administrátor upraví používateľský účet
- Administrátor zmení rolu používateľa
- Administrátor deaktivuje alebo aktivuje používateľský účet
- Administrátor spravuje obsah aplikácie
- Administrátor vykonáva administratívnu kontrolu používateľského obsahu
- Administrátor spravuje systémové nastavenia aplikácie

## Plánované entity
### User
- Reprezentuje registrovaného používateľa aplikácie.
- **Hlavné atribúty:** id, meno, email, heslo, rola, dátum registrácie.

### Game
- Predstavuje jednotlivé hry evidované v systéme.
- **Hlavné atribúty:** id, názov, popis, dátum vydania, vývojár, vydavateľ, cover obrázok.

### Genre
- Predstavuje žáner hry.
- **Hlavné atribúty:** id, názov, popis.

### Platform
- Predstavuje platformu, na ktorej je hra dostupná.
- **Hlavné atribúty:** id, názov.

### Review
- Predstavuje používateľské hodnotenie a textovú recenziu hry.
- **Hlavné atribúty:** id, používateľ, hra, hodnotenie, text recenzie, dátum vytvorenia.

### GameImage
- Predstavuje obrázok alebo screenshot priradený ku hre.
- **Hlavné atribúty:** id, hra, používateľ, názov súboru, cesta k súboru, dátum nahrania.

### UserGame
- Predstavuje vzťah používateľa ku konkrétnej hre a uchováva informácie o jej zaradení do osobnej knižnice alebo wishlistu, stave hry a čase hrania.
- **Hlavné atribúty:** id, používateľ, hra, stav, dátum pridania, čas hrania.

### GameGenre
- Spojovacia tabuľka medzi hrami a žánrami.
- **Hlavné atribúty:** game_id, genre_id.

### GamePlatform
- Spojovacia tabuľka medzi hrami a platformami.
- **Hlavné atribúty:** game_id, platform_id.

## Vzťahy medzi entitami
- Používateľ môže vytvoriť viac recenzií, pričom každá recenzia patrí jednému používateľovi. **User 1:N Review**
- Hra môže mať viac recenzií, pričom každá recenzia patrí jednej hre. **Game 1:N Review**
- Používateľ môže mať viac hier vo svojej knižnici alebo wishliste a jedna hra môže byť priradená viacerým používateľom. **User M:N Game**, realizované pomocou **UserGame**
- Hra môže patriť do viacerých žánrov a žáner môže byť priradený viacerým hrám. **Game M:N Genre**, realizované pomocou spojovacej tabuľky **GameGenre**
- Hra môže byť dostupná na viacerých platformách a platforma môže obsahovať viac hier. **Game M:N Platform**, realizované pomocou spojovacej tabuľky **GamePlatform**
- Používateľ môže nahrať viac obrázkov a každý obrázok patrí jednému používateľovi a jednej hre. **User 1:N GameImage** a **Game 1:N GameImage**

## Hlavné stránky aplikácie
### Domovská stránka
- Úvodná stránka aplikácie s prehľadom najdôležitejších funkcií, vyhľadávaním hier a vybranými alebo najnovšími hrami. Návštevník sa z nej môže dostať do katalógu hier alebo sa prihlásiť či zaregistrovať.

### Katalóg hier
- Stránka obsahujúca zoznam všetkých hier evidovaných v aplikácii. Umožňuje vyhľadávanie a filtrovanie hier podľa názvu, žánru, platformy a ďalších parametrov.

### Detail hry
- Stránka zobrazujúca podrobné informácie o vybranej hre, ako napríklad názov, popis, dátum vydania, vývojára, vydavateľa, žánre, platformy, obrázky, hodnotenie a používateľské recenzie. Registrovaný používateľ môže z tejto stránky pridať hru do knižnice alebo wishlistu a vytvoriť vlastné hodnotenie či recenziu.

### Moja knižnica
- Stránka dostupná prihlásenému používateľovi, na ktorej sa zobrazujú hry zaradené v jeho osobnej knižnici. Používateľ môže hry filtrovať podľa ich stavu, meniť ich stav, upravovať informácie o hraní a odstrániť ich z knižnice.

### Wishlist
- Stránka obsahujúca hry, ktoré si používateľ uložil na neskoršie hranie. Používateľ môže hry z wishlistu odstrániť alebo ich presunúť do svojej hernej knižnice.

### Profil a štatistiky
- Stránka používateľského profilu, na ktorej môže používateľ upravovať svoje údaje a zobrazovať štatistiky svojej hernej kolekcie, napríklad počet hier v knižnici, počet dokončených hier alebo celkový čas hrania.

### Správa katalógu
- Stránka určená kurátorovi a administrátorovi na správu hier, žánrov, platforiem a obrázkov. Umožňuje pridávanie, úpravu a odstraňovanie údajov v hernom katalógu.

### Administrácia
- Stránka dostupná administrátorovi na správu používateľských účtov, používateľských rolí a používateľského obsahu. Obsahuje aj administratívne funkcie potrebné na správu a kontrolu aplikácie.

## Rozdelenie funkcionality
### Základné funkcie
- registrácia a prihlásenie používateľa
- rozdelenie používateľov podľa rolí a kontrola oprávnení
- prehliadanie katalógu hier
- vyhľadávanie a filtrovanie hier
- zobrazenie detailu hry
- pridávanie, úprava a odstraňovanie hier z katalógu
- správa žánrov a platforiem
- pridanie, odstránenie a zmena stavu hry v osobnej knižnice
- správa wishlistu
- pridávanie, úprava a odstraňovanie vlastných recenzií
- hodnotenie hier
- nahrávanie a správa obrázkov a screenshotov
- správa používateľského profilu
- zobrazovanie základných herných štatistík
- administrácia používateľov a používateľských rolí
- validácia vstupov na strane klienta aj servera
- zabezpečenie používateľských účtov a ochrana aplikácie pred neoprávneným prístupom
- použitie AJAX pri vyhľadávaní, filtrovaní a práci s používateľskou knižnicou
- responzívne používateľské rozhranie prispôsobené mobilným zariadeniam

### Rozširujúce funkcie
- napojenie na externé API poskytujúce informácie o hrách
- automatické dopĺňanie údajov pri pridávaní novej hry
- detailnejšie štatistiky používateľovej hernej kolekcie
- zobrazovanie grafov a prehľadov herných štatistík
- odporúčanie hier na základe žánrov alebo používateľovej knižnice