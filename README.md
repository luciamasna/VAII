# Webová aplikácia zubnej ambulancie

Lucia Masná

5ZYR32

## Stručný opis projektu
Táto webová aplikácia má riešiť evidenciu pacientov, plánovanie a správu termínov, ako aj poskytovanie informácií o službách zubnej ambulancie. Je určená pre pacientov, ktorí si chcú pohodlne rezervovať termíny online, a pre administrátorov ambulancie, ktorí potrebujú efektívne spravovať databázu pacientov a ich návštevy. Aplikácia zároveň slúži lekárovi, ktorému umožňuje prezerať si kalendár naplánovaných vyšetrení, pristupovať k zdravotným kartám pacientov a zaznamenávať absolvované vyšetrenia a vykonané zákroky.

## Role v projekte
**Návštevník (neprihlásený používateľ)**: Má prístup k verejnej časti webovej stránky. Môže si prezerať informácie o ambulancii, poskytované služby, fotografie a aktuality. Má možnosť vytvoriť si používateľský účet alebo sa prihlásiť.

**Pacient**: Má prístup k svojmu používateľskému účtu, v ktorom môže spravovať osobné údaje, prezerať dostupné termíny a  zarezervovať si termín na vyšetrenia. Môže si prezerať históriu absolvovaných vyšetrení a informácie o preventívnych prehliadkach.

**Lekár**: Má prístup k svojmu používateľskému účtu, v ktorom môže spravovať svoj rozvrh, prezerať plánované zákroky a spravovať svoj čas. Môže si prezerať informácie o pacientoch.

**Administrátor ambulancie**: Zodpovedá za správu pacientov, ich údajov a termínov vyšetrení. Spravuje kalendár ambulancie a zabezpečuje aktuálnosť informácií o pacientoch a ich návštevách.

**Administrátor webovej stránky**: Zodpovedá za správu obsahu webovej stránky a používateľských účtov. Môže upravovať informácie o ambulancii, ponuku služieb, fotografie a publikovať aktuality. Spravuje používateľské roly a oprávnenia v systéme.

## Prípady použitia podľa rolí ##
### Návštevník (neprihlásený používateľ) ###
- Zobrazenie základných informácií o zubnej ambulancii a poskytovaných službách.
- Prezeranie fotografií ambulancie.
- Zobrazenie aktualít a oznamov.
- Zobrazenie kontaktných údajov a ordinačných hodín.
- Prezeranie informácií o pracovných príležitostiach v sekcii Kariéra.
- Registrácia nového pacientskeho účtu.
- Prihlásenie do existujúceho používateľského účtu.

### Pacient ###
- Prihlásenie a odhlásenie z používateľského účtu.
- Zobrazenie a úprava vlastných osobných a kontaktných údajov (napr. adresa bydliska, telefónne číslo, e-mail).
- Zobrazenie kalendára s dostupnými termínmi preventívnych prehliadok a stomatologických zákrokov.
- Výber a rezervovanie voľného termínu.
- Zobrazenie nadchádzajúcich rezervovaných termínov.
- Zrušenie vlastnej rezervácie termínu.
- Zobrazenie histórie absolvovaných vyšetrení a zákrokov.
- Zobrazenie dátumu poslednej absolvovanej preventívnej prehliadky.

### Lekár ###
- Prihlásenie a odhlásenie z používateľského účtu.
- Zobrazenie kalendára naplánovaných preventívnych prehliadok a stomatologických zákrokov.
- Zobrazenie informácií o pacientoch objednaných na jednotlivé termíny.
- Vyhľadávanie pacientov podľa mena alebo rodného čísla.
- Zobrazenie zdravotnej karty pacienta.
- Zobrazenie histórie absolvovaných vyšetrení a zákrokov pacienta.
- Zobrazenie a úprava zdravotných údajov pacienta (napr. alergie, užívané lieky, ochorenia a poznámky).
- Zaznamenanie absolvovaného vyšetrenia alebo vykonaného zákroku vrátane dátumu, typu a stručného opisu.
- Zaznamenanie absolvovania preventívnej prehliadky.

### Administrátor ambulancie ###
- Prihlásenie a odhlásenie z používateľského účtu.
- Zobrazenie zoznamu pacientov ambulancie.
- Vyhľadávanie pacientov podľa mena alebo rodného čísla.
- Pridávanie a úprava osobných a kontaktných údajov pacientov.
- Zobrazenie kalendára ambulancie s voľnými a obsadenými termínmi.
- Vytváranie nových termínov preventívnych prehliadok a stomatologických zákrokov.
- Úprava a rušenie existujúcich termínov.
- Zobrazenie informácií o pacientoch prihlásených na jednotlivé termíny.
- Rezervovanie alebo zrušenie termínu v mene pacienta.

### Administrátor webovej stránky ##
- Prihlásenie a odhlásenie z používateľského účtu.
- Správa používateľských účtov (vytváranie, úprava, deaktivácia).
- Priraďovanie a úprava používateľských rolí a oprávnení.
- Úprava základných informácií o ambulancii (adresa, kontakty, ordinačné hodiny).
- Správa informácií o poskytovaných službách.
- Pridávanie a odstraňovanie fotografií ambulancie.
- Vytváranie, úprava a odstraňovanie aktualít a oznamov.
- Správa informácií o pracovných príležitostiach v sekcii Kariéra.

## Plánované entity ##
![Plánované entity](/entity.png)

### User (Používateľ) ###

Entita slúži na evidenciu používateľských účtov a zabezpečenie prihlasovania do webovej aplikácie. Obsahuje identifikačné a prihlasovacie údaje používateľov vrátane ich roly, na základe ktorej sa určujú prístupové oprávnenia.

**Hlavné atribúty:** id (primárny kľúč), email, username, password, role.

**Vzťahy:** Entita je prepojená s entitou Pacient prostredníctvom atribútu user_id. Používateľský účet pacienta obsahuje jeho prihlasovacie údaje, zatiaľ čo účty lekára a administrátora ambulancie nemajú záznam v tabuľke Pacient.

### Pacient ###

Entita slúži na evidenciu pacientov zubnej ambulancie a uchovávanie ich základných osobných a kontaktných údajov. Každý pacient je jednoznačne identifikovaný rodným číslom.

**Hlavné atribúty:** rod_cislo (primárny kľúč), user_id (cudzí kľúč), meno, priezvisko, tel_c, adresa (cudzí kľúč).

**Vzťahy:** Pacient je prepojený s používateľským účtom a adresou. Môže mať viacero rezervovaných termínov a absolvovaných vyšetrení, pričom k nemu patrí jedna zdravotná karta.

### Termin ###

Entita slúži na evidenciu dostupných a rezervovaných termínov preventívnych prehliadok a stomatologických zákrokov. Každý termín obsahuje dátum a čas konania a typ vyšetrenia. Obsadenosť termínu je určená priradením pacienta.

**Hlavné atribúty:** id (primárny kľúč), datum, pacient (cudzí kľúč, môže byť NULL), typ_vysetrenia.

**Vzťahy:** Termín môže byť priradený jednému pacientovi. Ak atribút pacient neobsahuje hodnotu, termín je voľný a dostupný na rezerváciu.

### Vysetrenie ###

Entita slúži na evidenciu absolvovaných preventívnych prehliadok a stomatologických zákrokov. Umožňuje lekárovi zaznamenávať vykonané vyšetrenia a uchovávať ich ako súčasť zdravotnej dokumentácie pacienta.

**Hlavné atribúty:** id (primárny kľúč), datum, pacient (cudzí kľúč), typ_vysetrenia, popis.

**Vzťahy:**  Každé vyšetrenie patrí jednej konkrétnej zdravotnej karte prostredníctvom atribútu pacient, ktorý odkazuje na rodné číslo v entite Zdravotna_karta. Jedna zdravotná karta môže obsahovať viacero vyšetrení.

### Zdravotna_karta ###

Entita slúži na evidenciu zdravotnej dokumentácie pacienta. Obsahuje základné informácie o jeho zdravotnom stave, ako sú alergie, užívané lieky, ochorenia a ďalšie poznámky. Súčasťou zdravotnej karty je aj história absolvovaných preventívnych prehliadok a stomatologických zákrokov, ktoré sú evidované v samostatnej entite Vysetrenie.

**Hlavné atribúty:** rod_cislo (primárny a cudzí kľúč), evidovany_od, alergie, lieky, choroby, poznamky.

**Vzťahy:** Každá zdravotná karta patrí jednému pacientovi a môže obsahovať viacero záznamov o absolvovaných vyšetreniach.

### Adresa ###

Entita slúži na evidenciu adries pacientov. Oddelenie adresných údajov do samostatnej tabuľky umožňuje ich prepojenie s jednotlivými pacientmi.

**Hlavné atribúty:** id_adresa (primárny kľúč), ulica, cislo, mesto, psc, stat.

**Vzťahy:** Jedna adresa môže byť priradená viacerým pacientom, pričom každý pacient má v databáze priradenú jednu adresu.

## Vzťahy medzi entitami
 ### User – Pacient (1:1) ###

Každý pacient má priradený jeden používateľský účet, ktorý slúži na prihlásenie do aplikácie. Jeden používateľský účet môže byť prepojený najviac s jedným pacientom. Používateľské účty lekára a administrátora ambulancie nemusia byť prepojené s entitou Pacient.

### Pacient – Adresa (N:1) ###

Každý pacient má priradenú jednu adresu, pričom rovnaká adresa môže patriť viacerým pacientom, napríklad členom jednej domácnosti. Prepojenie je realizované prostredníctvom cudzieho kľúča adresa v tabuľke Pacient.

### Pacient – Termin (1:N) ###

Jeden pacient môže mať rezervovaných viacero termínov, pričom každý obsadený termín patrí najviac jednému pacientovi. Termín môže existovať aj bez priradeného pacienta, čo znamená, že je voľný. Vzťah je realizovaný prostredníctvom atribútu pacient v tabuľke Termin.

### Pacient – Vysetrenie (1:N) ###

Jeden pacient môže absolvovať viacero vyšetrení a zákrokov. Každé zaznamenané vyšetrenie patrí jednému konkrétnemu pacientovi. Tento vzťah umožňuje uchovávanie a zobrazovanie histórie absolvovaných vyšetrení.

### Pacient – Zdravotna_karta (1:1) ###

Každému pacientovi prislúcha jedna zdravotná karta, ktorá obsahuje informácie o jeho zdravotnom stave a umožňuje evidenciu absolvovaných vyšetrení. Každá zdravotná karta patrí práve jednému pacientovi. Vzťah je realizovaný prostredníctvom atribútu rod_cislo, ktorý je v tabuľke Zdravotna_karta primárnym aj cudzím kľúčom odkazujúcim na entitu Pacient.

### Zdravotna_karta – Vysetrenie (1:N) ###

Jedna zdravotná karta môže obsahovať viacero záznamov o absolvovaných preventívnych prehliadkach a stomatologických zákrokoch. Každé vyšetrenie patrí jednej konkrétnej zdravotnej karte. Vzťah je realizovaný prostredníctvom cudzieho kľúča pacient v tabuľke Vysetrenie, ktorý odkazuje na atribút rod_cislo v tabuľke Zdravotna_karta. Toto prepojenie umožňuje uchovávanie a zobrazovanie histórie všetkých absolvovaných vyšetrení pacienta v rámci jeho zdravotnej dokumentácie.

## Hlavné stránky aplikácie
**1. Úvodná stránka (Aktuality a oznamy)**

Úvodná stránka sa zobrazí návštevníkovi po otvorení webovej aplikácie. Bude obsahovať aktuálne informácie, novinky a dôležité oznamy týkajúce sa zubnej ambulancie. Súčasťou stránky bude navigačná lišta umožňujúca prechod na ďalšie stránky aplikácie.

**2. O nás**

Stránka bude obsahovať základné informácie o zubnej ambulancii, poskytovaných službách, kontaktné údaje a ordinačné hodiny. Súčasťou stránky bude aj fotogaléria zobrazujúca priestory a vybavenie ambulancie.

**3. Kariéra**

Stránka bude slúžiť na zverejňovanie informácií o voľných pracovných miestach v zubnej ambulancii. Návštevníci si budú môcť prezerať aktuálne pracovné ponuky a požiadavky na uchádzačov.

**4. Prihlásenie a registrácia**

Stránka umožní používateľom prihlásiť sa do existujúceho účtu a novým pacientom vytvoriť si používateľský účet. Po úspešnom prihlásení sa používateľovi sprístupní rozhranie a funkcie podľa jeho roly.

**5. Rezervácia termínu (Pacient)**

Stránka bude dostupná prihláseným pacientom a umožní im prezerať si kalendár s dostupnými termínmi preventívnych prehliadok a stomatologických zákrokov. Pacient si bude môcť vybrať voľný termín a vytvoriť rezerváciu.

**6. Profil pacienta (Pacient)**

Stránka bude obsahovať osobné a kontaktné údaje prihláseného pacienta, ktoré si bude môcť prezerať a upravovať. Pacient tu bude mať zároveň prehľad o svojich nadchádzajúcich rezervovaných termínoch s možnosťou ich zrušenia a históriu absolvovaných vyšetrení a zákrokov.

**7. Kalendár vyšetrení (Lekár)**

Stránka bude určená prihlásenému lekárovi a umožní mu zobrazovať kalendár naplánovaných preventívnych prehliadok a stomatologických zákrokov. Pri jednotlivých termínoch bude mať k dispozícii informácie o objednaných pacientoch.

**8. Zdravotné karty pacientov (Lekár)**

Stránka umožní lekárovi vyhľadávať pacientov a pristupovať k ich zdravotným kartám. Lekár si bude môcť prezerať a upravovať zdravotné údaje pacientov, zobrazovať históriu absolvovaných vyšetrení a pridávať nové záznamy o vykonaných vyšetreniach a zákrokoch.

**9. Správa termínov (Zubná asistentka)**

Stránka bude určená zubnej asistentke na správu termínov v ambulancii. Umožní jej vytvárať nové termíny preventívnych prehliadok a stomatologických zákrokov, upravovať alebo rušiť existujúce termíny a zobrazovať ich obsadenosť spolu s informáciami o objednaných pacientoch.

**10. Správa pacientov (Zubná asistentka)**

Stránka umožní zubnej asistentke zobrazovať zoznam evidovaných pacientov, vyhľadávať konkrétnych pacientov a spravovať ich osobné a kontaktné údaje. Bude tiež umožňovať pridávanie nových pacientov do evidencie ambulancie.


## Rozdelenie funkcionality

### Základné funkcie ###

Základné funkcie predstavujú hlavné funkcionality webovej aplikácie, ktoré sú nevyhnutné na zabezpečenie jej správneho fungovania a splnenie požiadaviek semestrálnej práce.

#### Verejná časť aplikácie ####

- Zobrazenie aktuálnych oznamov a noviniek týkajúcich sa zubnej ambulancie.

- Zobrazenie základných informácií o ambulancii, poskytovaných službách, kontaktných údajov a fotografií.

- Zobrazenie informácií o voľných pracovných miestach.

- Registrácia nových pacientov a prihlasovanie používateľov do aplikácie.

#### Funkcie pacienta ####

- Zobrazenie a úprava vlastných osobných a kontaktných údajov.

- Zobrazenie kalendára s dostupnými termínmi preventívnych prehliadok a stomatologických zákrokov.

- Rezervácia voľného termínu vyšetrenia.

- Zobrazenie nadchádzajúcich rezervovaných termínov a možnosť ich zrušenia.

- Zobrazenie histórie absolvovaných vyšetrení a zákrokov.

#### Funkcie lekára ####

- Zobrazenie kalendára naplánovaných vyšetrení a objednaných pacientov.

- Vyhľadávanie pacientov a zobrazenie ich zdravotných kariet.

- Zobrazenie a úprava zdravotných údajov pacientov.

- Zaznamenávanie absolvovaných vyšetrení a vykonaných zákrokov.

- Zobrazenie histórie vyšetrení jednotlivých pacientov.

#### Funkcie zubnej asistentky (administrátora ambulancie) ####

- Zobrazenie zoznamu pacientov a vyhľadávanie konkrétnych pacientov.

- Pridávanie, úprava a odstraňovanie záznamov pacientov.

- Zobrazenie kalendára voľných a obsadených termínov.

- Vytváranie, úprava a rušenie termínov vyšetrení.

- Správa rezervácií pacientov.

 #### Technické a bezpečnostné funkcie ####

- Autentifikácia používateľov a riadenie prístupových oprávnení podľa používateľských rolí.

- Validácia používateľských vstupov na strane klienta aj servera.

- Bezpečné ukladanie hesiel a ochrana pred SQL injection.

- Implementácia CRUD operácií nad entitami pacientov a termínov.

- Využitie AJAX komunikácie pri načítavaní dostupných termínov a vyhľadávaní pacientov.

- Implementácia nahrávania a správy fotografií ambulancie.

- Responzívne používateľské rozhranie prispôsobené rôznym zariadeniam.

### Rozširujúce funkcie ###

Rozširujúce funkcie predstavujú doplnkové možnosti aplikácie, ktoré môžu byť implementované v závislosti od časových možností po dokončení základnej funkcionality.

- Filtrovanie dostupných termínov podľa dátumu a typu vyšetrenia.

- Zobrazenie dátumu poslednej absolvovanej preventívnej prehliadky pacienta.

- Farebné rozlíšenie voľných a obsadených termínov v kalendári.

- Zobrazenie prehľadových štatistík o počte pacientov, rezervácií a absolvovaných vyšetrení.

- Možnosť pridávania, úpravy a odstraňovania aktualít a oznamov prostredníctvom administračného rozhrania.

- Možnosť správy pracovných ponúk v sekcii Kariéra.

- Automatické odosielanie e-mailových potvrdení o vytvorení alebo zrušení rezervácie.

- Export zoznamu rezervovaných termínov.

- Rozšírené vyhľadávanie a filtrovanie pacientov podľa viacerých kritérií.