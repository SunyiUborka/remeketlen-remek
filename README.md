Budapesti Műszaki Szakképzési Centrum

Neumann János Informatikai Technikum

**Szakirány neve**: Szoftverfejlesztő(szft)

Vizsgaremek

Dos-Arc

Fejlesztő csapat:

Tóth Péter Pál,

Csehi Roland Álmos,

Kis Ábrahám

Konzulens:

Várkonyi Tibor Zoltán

Budapest 2022

Tartalomjegyzék

[Bevezetés téma ismertetés:](#bevezetés-téma-ismertetés)

[1. Fejlesztői dokumentáció:](#1-fejlesztői-dokumentáció)

[1.1 Fejlesztéshez használt programozás nyelvek:](#11-fejlesztéshez-használt-programozás-nyelvek)

[1.2 Fejlesztő alkalmazások](#12-fejlesztő-alkalmazások)

[1.3 Program setup](#_Toc102333136)

[1.4 Program felépítés-e](#14-program-felépítés-e)

[1.4.1. Adatbázis](#141-adatbázis)

[1.4.2. Backend](#142-backend)

[1.4.5 Frontend](#145-frontend)

[2. Felhasználói dokumentáció](#2-felhasználói-dokumentáció)

[2.1 Regisztráció](#21-regisztráció)

[2.1.2 Bejelentkezés](#212-bejelentkezés)

[2.1.3 Navigációs felület](#213-navigációs-felület)

[2.1.4 Profil szerkesztés](#214-profil-szerkesztés)

[2.1.5 szoftver feltöltés](#215-szoftver-feltöltés)

[3. Tesztelés](#3-tesztelés)

[3.1 Web applikáció unit tesztek](#31-web-applikáció-unit-tesztek)

# Bevezetés téma ismertetés:

Manapság sajnos kevés rendszeren fut a dos-os operációs rendszer, pedig rengeteg érdekes ötlet és gondolat valósult meg ezen a rendszeren keresztül, például akkortájt rengeteg szórakoztató vagy hasznos alkalmazást hoztak létre, amiket napjainkban már nem tudunk élvezni. Az idő múlásával tönkre mennek a régi meghajtók, hordozható tárolók, és teljesen elvesznek ezek a szoftverek, mivel nincsenek a felhőbe mentve.  
Ezért szerettünk volna létrehozni egy webalkalmazást, ahol ezeket a szoftvereket tárolni lehet, emellett ezen műfaj kedvelői is le- és fel tudják tölteni saját munkájukat, majd azokat értékelhetik vagy hozzászólhatnak egymás alkotásaihoz. Ezáltal a hibákat jelezhetik, sőt, ha szeretnék, még ki is tárgyalhatják a gondolataikat egy Fórumon vagy kérdezhetnek, ha problémába ütköznek. Mivel web alkalmazásról beszélünk, akárhol elérhetik azt az interneten keresztül bármilyen olyan eszközről, amin futtatható egy dos emulátor.

Mobiltelefonon is használható a webalkalmazás, mivel webes mivoltából adódóan reszponzívan bárhol a megadott eszközön megfelelően működik, viszont nem mindenhol futtathatóak ezek a szoftverek, így csak megadott funkciókat tudunk implementálni ezeken az eszközökön.

# 1. Fejlesztői dokumentáció:

## 1.1 Fejlesztéshez használt programozás nyelvek:

php 8.0

javascript

## 1.2 Fejlesztő alkalmazások

Jetbrains Phpstorm

Docker

mysql 8.0-20.04_beta

1.3 Program setup

Fontos, hogy a docker fusson; ezek után az operációs rendszertől függően elindítjuk, ha Windows rendszerünk van akkor install.bat-ot, ha pedig linux verziónk van akkor intsall.sh file-t futtassunk.

Hogy ha a docker image megfelelően fut, akkor localhost:8881-en elérjük az oldalunkat, localhost:8882-ön pedig a mysql adatbázis kezelőt.

Adatbázis felhasználó neve: laravel

Jelszó: password

## 1.4 Program felépítés-e

### 1.4.1. Adatbázis

Migrációk létrehozása: php artisan make:migration create_name_table

Adatbázis szerkezet:

![](media/820ef8a2b003f220e7646fa67138dab7.png)

### 1.4.2. Backend

Az adatbázis kapcsolatát a frontend-del MVC keret rendszerrel oldottuk meg.

A modell foglalkozik az adatbázis kapcsolatával, ezáltal könnyen elérjük az adatokat. A modelleket az app/models útvonalon találjuk meg.

A modellben különböző kapcsolatokat is létre lehet hozni, hogy egy megadott táblából mit kapjon meg a modellünk.

Modellek:

1.  User model kódja:

![](media/b857b38261b431be381fbdcb82ff108c.png)

1.  Program model kódja:

![](media/2def6814f637506cb8d3e6d0d2475fd4.png)

1.  ProgramRating model kódja:

    ![](media/9f9b8747bf8f9e0f4eb1cd1c863be6a7.png)

2.  ProgramCategory model kódja:

![](media/10f983fbbe50f7e0df2256aadaa9cf7b.png)

1.  Category model kódja

![](media/1b512f0c7fde1e7034349e6633e70476.png)

1.  Role model kódja:

    ![](media/95ca69b323cb1ff524aa9b7407afc54b.png)

2.  Thread model kódja:

    ![](media/f51814daac8f360c81aacc4372803ff3.png)

3.  Post model kódja:

    ![](media/ecd32aa1f80b04c5d5746e7ab09faab3.png)

1.  Comment model kódja:

    ![](media/7a95084941a43231ec5c9a219b962a71.png)

1.  Type model kódja:

    ![](media/9f9b8747bf8f9e0f4eb1cd1c863be6a7.png)

A controller végzi a felhasználó kéréseinek kezelését és kiszolgálását. Más néven vezérlőnek is hívhatjuk, így tudnak kommunikálni a nézetek és a modelek között.

A controller fileokat az app/http/controllers útvonalon

találjuk meg.

Controllerek:

a) AuthController kód:

Ennél a controllernél ellenőrizzük, hogy megfelelő jelszót vagy felhasználó nevet ad-e meg a user.

![](media/1b9a8b9e6caf750e16b334675463ed58.png)

A register validálja, hogy a kétszer bekért jelszavunk megegyezik-e, és utána, ha az sikeres, létrehoz nekünk egy felhasználót a megadott adatokkal.

b) RegisterController kód:

![](media/a8804cc2adbc142a9b69c51158c85d7f.png)

A SiteController irányít minket az oldalak között.

c) SiteController kód:

![](media/b989e77bb241813393f89805c647af6c.png)

d) UserController kód:

Itt töltjük fel az adatbázisba a profile képeket és megy végbe a jelszóváltoztatás.

![](media/b97b1f4f447358482913dcf0608524bb.png)

A ProgramController oldja meg a program fileok tárolását.

e) ProgramController kód:

![](media/1bebfc810d44d26178aa5817ddae3673.png)

Fájl tárolása:

A feltöltött fájlokat a Storage/app útvonalra linkeljük.

Ezt a config/filesystem tehetjük meg; először az adattömb kulcsot kell megadni, aztán a megadjuk a nevét a mappának, ahol tárolni szeretnénk a fájlt.

link kódja:

![](media/8b64315b117de0ff90451e726a290152.png)

Útvonalak megadása:

Az útvonalak megadása a routes/web.php fájlon belül lehetséges.

A route függvénnyel crud műveleteket használunk, amivel visszakérhetünk egy vagy több adatot, frissíthetünk, létrehozhatunk és törölhetünk is, megadhatunk egy url címet is akár, amire hivatkozni tudunk. Azután vesszővel elválasztva adhatunk át adatokat egy controllerből és annak egy action meghívásával; emellett ezt el is nevezhetjük a könnyebb meghívás érdekében.

route példa kód:

![](media/bc46b8b8f9428ab52b3515df3c9dd93a.png)

Egyéni requestek:

A request generálása: ![](media/d70940cf060ffa9c25522e55aa2291d0.png)

Ezeket a requesteket az app/http/requests mappába tudjuk generálni és saját meghívási szabályokat hozhatunk létre.

Ehhez előbb meg kell vizsgálni, hogy a user a request szabálynak megfelelő requestet küld-e a modelek felé.

![](media/cd3e2c2e567152a8b106a08ffeea08b8.png)

Rest api:

A web applikációban található rest api routeok a routes/api.php fájlban lehet megtalálni és ez ugyanúgy működik, mint a web routing, de azzal ellentétben az api route statless, vagyis nem tárol el plusz információt.

api routing példa kódja:

![](media/ccc706947f205445c6f67677cd8ae374.png)

Az api controllerekben kell kezelni a https requesteket.

controller példa kód:

![](media/99b9a3faac2cfad4ce1b09cd65793a86.png)

### 1.4.5 Frontend

A frontend a view-kból állnak és lehetőséget ad webes felületeket készíteni. A resources/views mappában találjuk meg ezeket a nézeteket és ide is kell létrehozni. A laravel view-kat blade tag-gel kell létrehozni, mint pl: index.blade.php, így használni tudjuk a laraveles formokat.

# 2. Felhasználói dokumentáció

## 2.1 Regisztráció

A regisztrációhoz kell egy felhasználónév, ami maximum 16 karakter lehet, és egy jelszó, aminek minimum 8 karakternek kell lennie. Ezeken felül szükség van egy email cím-re is.

![](media/c6150eb9e8a590ebcf76d51e741b87b2.png)

### 2.1.2 Bejelentkezés

Meg kell adnunk a felhasználónevünk és jelszavunk.

![](media/8b09e30588ec2c1e8563b48f7c9d5afd.png)

### 2.1.3 Navigációs felület

![](media/698b9723c10fd4a86ec8da6c9e64d989.png)

Az első, a kis ház, a főmenü oldalának a gombja.

A második az alkalmazás-feltöltés oldal gombja.

A harmadik a fórumkészítő oldalra vezető gomb.

A negyedik a profile szerkesztő oldalra vezető gomb.

Az utolsó a kijelentkezés gomb.

### 2.1.4 Profil szerkesztés

a) Képcseréhez kötelező egy képet feltölteni.

![](media/abb18ee9c622e8e1cc4a80e8459d4bcc.png)

b) Tudnunk kell a jelszó cseréjéhez a régi jelszavunk és kétszer meg kell adni az új jelszavat, aminek szintén minimum 8 karakternek kell lennie.

![](media/61cc4a961815c8cad836b5f499d54bc9.png)

### 2.1.5 szoftver feltöltés

Kötelező kitölteni a program neve mezőt, a kategóriát kiválasztani, feltölteni egy képet, megjelölni a típust, felölteni a kívánt fájlt és kijelölni a megjelenés napját, de nem kötelező kitölteni a készítő sort és a leírást.

![](media/29e68c532788d7e3e9cbe0632c979dc9.png)

2.1.6 Forum létrehozása

Kötelező kitölteni az inputot a fórum létrehozásához.

![](media/525be80f4ec3d54b00681d8f31b60d35.png)

# 3. Tesztelés

## 3.1 Web applikáció unit tesztek

a) Csatlakozás teszt

![](media/301ef998009ac619482cc05a2359b558.png)

b) Regisztráció teszt

![](media/cd6289414adef31d1b9c2c500cf47dfb.png)

c) Login teszt

![](media/734cba981ea4948ccf60904d1041926e.png)

d) kép feltöltés teszt

![](media/3867de61823ecb599357c7164cf95bd2.png)

e) jelszó cserélés teszt

![](media/09d854015e48a1431e0c70efd3098b60.png)

f) Program feltöltés teszt

![](media/e97848b7ae33f5f82010493a9f654f04.png)

g) Forum létrehozás teszt

![](media/964eb5db25aefbc05edbae2ea90f50df.png)
