# Vizsgaremek

- Budapesti Műszaki Szakképzési Centrum
- Neumann János Informatikai Technikum
- Szakképesítés neve: Szoftverfejlesztő és -tesztelő
- száma: 5-0613-12-03
- Budapest 2022

## DosArc

Fejlesztő csapat:
- Tóth Péter Pál [@Rohampingvin](https://github.com/Rohampingvin)
- Csehi Roland Álmos [@SunyiUborka](https://github.com/SunyiUborka)
- Kis Ábrahám [@kiss533](https://github.com/kiss533)

Konzulens:
- Várkonyi Tibor Zoltán


[Bevezetés téma ismertetés:](#bevezetés-téma-ismertetés)

1. [Fejlesztői dokumentáció:](#1-fejlesztői-dokumentáció)
    - [Fejlesztéshez használt programozás nyelvek:](#11-fejlesztéshez-használt-programozás-nyelvek)
    - [Fejlesztő alkalmazások](#12-fejlesztő-alkalmazások)
    - [Program setup](#13-program-setup)
    - [Program felépítés-e](#14-program-felépítés-e)
        - [Adatbázis](#141-adatbázis)
        - [Backend](#142-backend)
        - [Frontend](#145-frontend)

2. [Felhasználói dokumentáció](#2-felhasználói-dokumentáció)
    - [Regisztráció](#21-regisztráció)
    - [Bejelentkezés](#212-bejelentkezés)
    - [Navigációs felület](#213-navigációs-felület)
    - [Profil szerkesztés](#214-profil-szerkesztés)
    - [szoftver feltöltés](#215-szoftver-feltöltés)

3. [Tesztelés](#3-tesztelés)
    - [Web applikáció unit tesztek](#31-web-applikáció-unit-tesztek)

# Bevezetés téma ismertetés:

Manapság sajnos kevés rendszeren fut a dos-os operációs rendszer, pedig rengeteg érdekes ötlet és gondolat valósult meg ezen a rendszeren keresztül, például akkortájt rengeteg szórakoztató vagy hasznos alkalmazást hoztak létre, amiket napjainkban már nem tudunk élvezni. Az idő múlásával tönkre mennek a régi meghajtók, hordozható tárolók, és teljesen elvesznek ezek a szoftverek, mivel nincsenek a felhőbe mentve.  
Ezért szerettünk volna létrehozni egy webalkalmazást, ahol ezeket a szoftvereket tárolni lehet, emellett ezen műfaj kedvelői is le- és fel tudják tölteni saját munkájukat, majd azokat értékelhetik vagy hozzászólhatnak egymás alkotásaihoz. Ezáltal a hibákat jelezhetik, sőt, ha szeretnék, még ki is tárgyalhatják a gondolataikat egy Fórumon vagy kérdezhetnek, ha problémába ütköznek. Mivel web alkalmazásról beszélünk, akárhol elérhetik azt az interneten keresztül bármilyen olyan eszközről, amin futtatható egy dos emulátor.

Mobiltelefonon is használható a webalkalmazás, mivel webes mivoltából adódóan reszponzívan bárhol a megadott eszközön megfelelően működik, viszont nem mindenhol futtathatóak ezek a szoftverek, így csak megadott funkciókat tudunk implementálni ezeken az eszközökön.

# 1. Fejlesztői dokumentáció:

## 1.1 Fejlesztéshez használt programozás nyelvek:

- php 8.0
- javascript

## 1.2 Fejlesztő alkalmazások

- Jetbrains Phpstorm
- Docker
- mysql 8.0-20.04_beta
- PhpMyadmin

## 1.3 Program setup

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

```php
class User extends Authenticatable
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'username',
        'email',
        'password',
        'user_image'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
```

2.  Program model kódja:

```php
class Program extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'user_id',
        'program_file',
        'program_image',
        'type_name',
        'developer',
        'release_date',
        'name',
        'description'
    ];
}
```

3.  Category model kódja

```php
class Category extends Model
{
    protected $primaryKey = "name";
    protected $fillable = ['name'];
    public $timestamps = false;
    
    public function programs() {
        return $this->belongsToMany(Program::class , 'program_categories');
    }
}
```

4.  Role model kódja:

```php
class Role extends Model
{
    protected $keyType = 'string';
    public $timestamps = false;
}
```

5.  Thread model kódja:

```php
class Thread extends Model
{
    protected $fillable = ['id' , 'program_id' , 'title' , 'description'];

    public function posts() {
        return $this->hasMany(Post::class , 'thread_id');
    }
}
```

6.  Post model kódja:

```php
class Post extends Model
{
    protected $fillable = [
        'id',
        'thread_id',
        'user_id',
        'title',
        'description'
    ];

    public function comments() {
        return $this->hasMany(Comment::class , 'post_id');
    }
}
```

7.  Comment model kódja:

```php
class Comment extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id' , 'post_id' , 'user_id' , 'text'];

    public function post() {
        return $this->belongsTo(Post::class, 'post_id');    
    }
}
```

8.  Type model kódja:

```php
class Type extends Model
{
    protected $primaryKey = "name";
    protected $fillable = ['name'];
    public $timestamps = false;

    public function programs() {
        return $this->hasMany(Program::class , 'program_id');    
    }
}
```

A controller végzi a felhasználó kéréseinek kezelését és kiszolgálását. Más néven vezérlőnek is hívhatjuk, így tudnak kommunikálni a nézetek és a modelek között.

A controller fileokat az app/http/controllers útvonalon

találjuk meg.

Controllerek:

a) AuthController kód:

Ez a controller felel, hogy megfelelő adatokkal be lehessen jelentkezni és majd kijelentkezni.

```php
class AuthController extends Controller
{
    public function authenticate(LoginRequest $request)
    {
        $data = $request->validated();

        if(!Auth::attempt($data)){
            $request->session()->flash("danger", "Hibás felhasználónév vagy jelszó");
            return redirect()->route("home");
        }
        return redirect()->route("home");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("home");
    }
}
```

A register validálja, hogy a kétszer bekért jelszavunk megegyezik-e, és utána, ha az sikeres, létrehoz nekünk egy felhasználót a megadott adatokkal.

b) RegisterController kód:

```php

```

A SiteController irányít minket az oldalak között.

c) SiteController kód:

```php

```

d) UserController kód:

Itt töltjük fel az adatbázisba a profile képeket és megy végbe a jelszóváltoztatás.

```php

```

A ProgramController oldja meg a program fileok tárolását.

e) ProgramController kód:

```php

```

Fájl tárolása:

A feltöltött fájlokat a Storage/app útvonalra linkeljük.

Ezt a config/filesystem tehetjük meg; először az adattömb kulcsot kell megadni, aztán a megadjuk a nevét a mappának, ahol tárolni szeretnénk a fájlt.

link kódja:

```php

```

Útvonalak megadása:

Az útvonalak megadása a routes/web.php fájlon belül lehetséges.

A route függvénnyel crud műveleteket használunk, amivel visszakérhetünk egy vagy több adatot, frissíthetünk, létrehozhatunk és törölhetünk is, megadhatunk egy url címet is akár, amire hivatkozni tudunk. Azután vesszővel elválasztva adhatunk át adatokat egy controllerből és annak egy action meghívásával; emellett ezt el is nevezhetjük a könnyebb meghívás érdekében.

route példa kód:

```php

```

Egyéni requestek:

A request generálása: 

```php

```

Ezeket a requesteket az app/http/requests mappába tudjuk generálni és saját meghívási szabályokat hozhatunk létre.

Ehhez előbb meg kell vizsgálni, hogy a user a request szabálynak megfelelő requestet küld-e a modelek felé.

```php

```

Rest api:

A web applikációban található rest api routeok a routes/api.php fájlban lehet megtalálni és ez ugyanúgy működik, mint a web routing, de azzal ellentétben az api route statless, vagyis nem tárol el plusz információt.

api routing példa kódja:

```php

```

Az api controllerekben kell kezelni a https requesteket.

controller példa kód:

```php

```

### 1.4.5 Frontend

A frontend a view-kból állnak és lehetőséget ad webes felületeket készíteni. A resources/views mappában találjuk meg ezeket a nézeteket és ide is kell létrehozni. A laravel view-kat blade tag-gel kell létrehozni, mint pl: index.blade.php, így használni tudjuk a laraveles formokat.

# 2. Felhasználói dokumentáció

## 2.1 Regisztráció

A regisztrációhoz kell egy felhasználónév, ami maximum 16 karakter lehet, és egy jelszó, aminek minimum 8 karakternek kell lennie. Ezeken felül szükség van egy email cím-re is.

```php

```

### 2.1.2 Bejelentkezés

Meg kell adnunk a felhasználónevünk és jelszavunk.

```php

```

### 2.1.3 Navigációs felület

```php

```

Az első, a kis ház, a főmenü oldalának a gombja.

A második az alkalmazás-feltöltés oldal gombja.

A harmadik a fórumkészítő oldalra vezető gomb.

A negyedik a profile szerkesztő oldalra vezető gomb.

Az utolsó a kijelentkezés gomb.

### 2.1.4 Profil szerkesztés

a) Képcseréhez kötelező egy képet feltölteni.

```php

```

b) Tudnunk kell a jelszó cseréjéhez a régi jelszavunk és kétszer meg kell adni az új jelszavat, aminek szintén minimum 8 karakternek kell lennie.

```php

```

### 2.1.5 szoftver feltöltés

Kötelező kitölteni a program neve mezőt, a kategóriát kiválasztani, feltölteni egy képet, megjelölni a típust, felölteni a kívánt fájlt és kijelölni a megjelenés napját, de nem kötelező kitölteni a készítő sort és a leírást.

```php

```

2.1.6 Forum létrehozása

Kötelező kitölteni az inputot a fórum létrehozásához.

```php

```

# 3. Tesztelés

## 3.1 Web applikáció unit tesztek

a) Csatlakozás teszt

```php

```

b) Regisztráció teszt

```php

```

c) Login teszt

```php

```

d) kép feltöltés teszt

```php

```

e) jelszó cserélés teszt

```php

```

f) Program feltöltés teszt

```php

```

g) Forum létrehozás teszt

```php

```
