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

## 1.4 Program felépítése

### 1.4.1. Adatbázis

#### Migrációk létrehozása
`docker-compose exec php php artisan make:migration create_name_table`

#### Adatbázis szerkezet

![alt text](https://github.com/SunyiUborka/remeketlen-remek/blob/main/kepek/adtaszerkezet.jpg)

### 1.4.2. Backend

Az adatbázis kapcsolatát a frontend-del MVC keret rendszerrel oldottuk meg.

A modell foglalkozik az adatbázis kapcsolatával, ezáltal könnyen elérjük az adatokat. A modelleket az app/models útvonalon találjuk meg.

A modellben különböző kapcsolatokat is létre lehet hozni, hogy egy megadott táblából mit kapjon meg a modellünk.

## Modellek

### User model kódja

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

### Program model kódja

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
### Category model kódja

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

### Role model kódja

```php
class Role extends Model
{
    protected $keyType = 'string';
    public $timestamps = false;
}
```

### Thread model kódja

```php
class Thread extends Model
{
    protected $fillable = ['id' , 'program_id' , 'title' , 'description'];

    public function posts() {
        return $this->hasMany(Post::class , 'thread_id');
    }
}
```

### Post model kódja

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

### Comment model kódja

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

### Type model kódja

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

## Controllerek

A controller végzi a felhasználó kéréseinek kezelését és kiszolgálását. Más néven vezérlőnek is hívhatjuk, így tudnak kommunikálni a nézetek és a modelek között.

A controller fileokat az app/http/controllers útvonalon
találjuk meg.

### AuthController kód

A controller azért felel, hogy megfelelő adatokkal be lehessen jelentkezni és majd kijelentkezni.

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

### RegisterController kód

A register az előre megírt validátorral ellenőrzi a megfelelő adatokat, majd ha ez sikeres volt, akkor a jelszót titkosítja és elmenti az adatbázisba és végül átírányít a kezdőoldalra, ahol bejelentkezhet a felhasználó.

```php
class RegisterController extends Controller
{
    public function create()
    {
        return view("auth.create");
    }

    public function store(RegisterStoreRequest $request)
    {
        $data = $request->validated();
        $data["password"] = Hash::make($data["password"]);

        User::create($data);
        return redirect()->route("home");
    }
}
```

### SiteController kód

SiteController irányít minket az oldalak között.

```php
class SiteController extends Controller
{
    public function index()
    {
        return view('dosarc.home');
    }

    public function home()
    {
        Gate::authorize("create-belep");
        return view('dosarc.home');
    }

    public function show(Program $program) {
        Gate::authorize("create-belep");
        return view('dosarc.show', [
            'data' => $program,
            'title' => $program['name']
        ]);
    }

    public function upload() {
        Gate::authorize("create-belep");
        return view('dosarc.upload');
    }

    public function forum() {
        Gate::authorize("create-belep");
        return view('dosarc.forum');
    }

    public function profile() {
        Gate::authorize("create-belep");
        return view('dosarc.profile');
    }
}
```

### UserController kód

Itt töltjük fel az adatbázisba a profile képeket és megy végbe a jelszóváltoztatás.

```php
class UserController extends Controller
{
    public function updateImage(UpdateUserImageRequest $request)
    {
        $data = $request->validated();
        $fileimage = $data['user_image']->store('user_image');
        $data['user_image'] = $fileimage;
        Auth::user()->update($data);
        return redirect()->back();
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $data = $request->validated();
        if (!Hash::check($data['old_password'], Auth::user()->getAuthPassword())){
            $request->session()->flash('bad_password', 'Hibás a jelenlegi jelszó!');
            return redirect()->back();
        }
        $data['password'] = Hash::make($data['password']);
        Auth::user()->update($data);
        return redirect()->back();
    }
}
```

### ProgramController kód

A ProgramController oldja meg a programok adatainak tárolását, megjelenítését és törlését.

Törölni és szerkeszteni, csak megfelelő jogokkal lehetséges.
```php
class ProgramController extends Controller
{
    public function index() {
        return Program::all();
    }

    public function show($id) {
        return Program::findOrFail($id);
    }

    public function store(ProgramStoreRequests $request) {
        Gate::authorize("create-belep");
        
        $data = $request->validated();
        
        $filename =  $data['program_file']->store('program_file');
        $fileimage = $data['program_image']->store('program_image');

        $data['user_id'] = Auth::user()->id;
        $data['program_file'] = $filename;
        $data['program_image'] = $fileimage;

        Program::create($data);

        return redirect()->back();
    }

    public function update(ProgramStoreRequests $request , $id) {
        Gate::authorize("admin-role");
        Program::update($request->validated());
    }

    public function destroy($id) {
        Gate::authorize("admin-role");
        Program::delete($id);
    }
}
```

### Fájl tárolása

A feltöltött fájlokat a Storage/app útvonalra linkeljük.

Ezt a config/filesystem tehetjük meg; először az adattömb kulcsot kell megadni, aztán a megadjuk a nevét a mappának, ahol tárolni szeretnénk a fájlt.

#### link kódja

```php
'links' => [
        public_path('user_image') => storage_path('app/user_image'),
        public_path('program_file') => storage_path('app/program_file'),
        public_path('program_image') => storage_path('app/program_image'),
    ],
```

### Útvonalak megadása

Az útvonalak megadása a routes/web.php fájlon belül lehetséges.

A route függvénnyel crud műveleteket használunk, amivel visszakérhetünk egy vagy több adatot, frissíthetünk, létrehozhatunk és törölhetünk is, megadhatunk egy url címet is akár, amire hivatkozni tudunk. Azután vesszővel elválasztva adhatunk át adatokat egy controllerből és annak egy action meghívásával; emellett ezt el is nevezhetjük a könnyebb meghívás érdekében.

#### route példa kód

```php
Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])
    ->name('home');
```

### Egyéni requestek

#### A request generálása

`docker-compose exec php php artisan make:request name`

Ezeket a requesteket az app/http/requests mappába tudjuk generálni és saját meghívási szabályokat hozhatunk létre.

Ehhez előbb meg kell vizsgálni, hogy a user a request szabálynak megfelelő requestet küld-e a modelek felé.

```php
class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "username" => ["required"],
            "password" => ["required"]
        ];
    }

    public function messages() {
        return [
            'username.required' => 'A felhasználónév megadása kötelező!',
            'password.required' => 'A jelszó megadása kötelező!',
        ];
    }
}
```

### Rest api

A web applikációban található rest api routeok a routes/api.php fájlban lehet megtalálni és ez ugyanúgy működik, mint a web routing, de azzal ellentétben az api route statless, vagyis nem tárol el plusz információt.

#### api routing példa kódja

```php
route::get('/threads', [\App\Http\Controllers\ThreadController::class, 'index'])
    ->name('threads.index');
route::get('/threads/{threads}', [\App\Http\Controllers\ThreadController::class, 'show'])
    ->name('threads.show');
route::post('/threads', [\App\Http\Controllers\ThreadController::class, 'store'])
    ->name('threads.store');
route::put('/threads/{threads}', [\App\Http\Controllers\ThreadController::class, 'update'])
    ->name('threads.update');
route::delete('/threads/{threads}', [\App\Http\Controllers\ThreadController::class, 'destroy'])
    ->name('threads.destroy');
```

#### Controller példa kód

Az api controllerekben kell kezelni a https requesteket.

```php
class ThreadController extends Controller
{
    public function index()
    {
        Thread::all();
    }

    public function store(ForumRequest $request)
    {
        Gate::authorize("create-belep");
        Thread::create($request->validated());
    }

    public function show($id)
    {
        return Thread::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        Gate::authorize("admin-role");
        Thread::update($request->validate());
    }
    public function destroy($id)
    {
        Gate::authorize("admin-role");
        Thread::delete($id);
    }
}
```

### 1.4.5 Frontend

A frontend a view-kból állnak és lehetőséget ad webes felületeket készíteni. A resources/views mappában találjuk meg ezeket a nézeteket és ide is kell létrehozni. A laravel view-kat blade tag-gel kell létrehozni, mint pl: index.blade.php, így használni tudjuk a laraveles formokat.

# 2. Felhasználói dokumentáció

## 2.1 Regisztráció

A regisztrációhoz kell egy felhasználónév, ami maximum 16 karakter lehet, és egy jelszó, aminek minimum 8 karakternek kell lennie. Ezeken felül szükség van egy email cím-re is.

![alt text](https://github.com/SunyiUborka/remeketlen-remek/blob/main/kepek/registr%C3%A1c%C3%B3.jpg)

### 2.1.2 Bejelentkezés

Meg kell adnunk a felhasználónevünk és jelszavunk.

![alt text](https://github.com/SunyiUborka/remeketlen-remek/blob/main/kepek/bejelentkez%C3%A9s.jpg)

### 2.1.3 Navigációs felület

![alt text](https://github.com/SunyiUborka/remeketlen-remek/blob/main/kepek/navbar.jpg)

Az első, a kis ház, a főmenü oldalának a gombja.

A második az alkalmazás-feltöltés oldal gombja.

A harmadik a fórumkészítő oldalra vezető gomb.

A negyedik a profile szerkesztő oldalra vezető gomb.

Az utolsó a kijelentkezés gomb.

### 2.1.4 Profil szerkesztés

#### Képcseréhez kötelező egy képet feltölteni.

![alt text](https://github.com/SunyiUborka/remeketlen-remek/blob/main/kepek/kepfeltoltes.jpg)

#### Tudnunk kell a jelszó cseréjéhez a régi jelszavunk és kétszer meg kell adni az új jelszavat, aminek szintén minimum 8 karakternek kell lennie.

![alt text](https://github.com/SunyiUborka/remeketlen-remek/blob/main/kepek/jelszocsere.jpg)

### 2.1.5 szoftver feltöltés

Kötelező kitölteni a program neve mezőt, a kategóriát kiválasztani, feltölteni egy képet, megjelölni a típust, felölteni a kívánt fájlt és kijelölni a megjelenés napját, de nem kötelező kitölteni a készítő sort és a leírást.

![alt text](https://github.com/SunyiUborka/remeketlen-remek/blob/main/kepek/programfeltoltes.jpg)

2.1.6 Forum létrehozása

Kötelező kitölteni az inputot a fórum létrehozásához.

![alt text](https://github.com/SunyiUborka/remeketlen-remek/blob/main/kepek/Forumletrehozas.jpg)

# 3. Tesztelés

## 3.1 Web applikáció unit tesztek

### Csatlakozás teszt

```php
    public function test_connecting()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
```
### Regisztráció teszt

```php
  public function test_register(){
    $response = $this->post('/register',[
         'username' => 'alma',
         'email' => 'alma@email.com',
         'password' => 'almaalma',
         'password_confirmation' => 'almaalma'
     ]);
     $response->assertRedirect('/');
  }
```

### Login teszt

```php
    public function test_login(){
        $response = $this->post('/login',[
            'username' => 'alma',
            'password'=> 'almaalma'
        ]);
        $response->assertRedirect('/');
    }
```

### kép feltöltés teszt

```php
    public function test_profile_image_update(){
        Storage::fake('public');
        $this->json('put', '/profile/image', [
            'user_image' => $file = UploadedFile::fake()->image('random.jpg')
        ]);
        $this->assertEquals('user_image/' . $file->hashName(), UploadedFile::latest()->first()->file);
        Storage::disk('public')->assertExists('user_image/' . $file->hashName());
    }
```

### jelszó cserélés teszt

```php
    public function test_password_change(){
        $url = route('user.update-password');
        $values = [
            'old_password'=>'adminadmin',
            'password'=>'adminadmin',
            'password_confirmation' => 'adminadmin',
        ];
        $response = $this->post($url,$values);
        $this->assertDatabaseHas(User::class, $values);
        $response->assertRedirect('profile');
    }
```

### Program feltöltés teszt

```php
      public function test_program_upload(){
            Storage::fake('public');
            $response = $this->put( '/dosarc', [
                'name'=> 'game',
                'program_image' => $file_image = UploadedFile::fake()->image('random.jpg'),
                'developer' => "",
                'type_name' => 'Szoftver',
                'category_name' => '',
                'program_file' => $program_file = UploadedFile::fake()->create('file.zip'),
                'release_date' => '',
                'description' => ''
              ]);
        $this->assertEquals('user_image/' . $file_image->hashName(), UploadedFile::latest()->first()->file_image);
        $this->assertEquals('program_file/' . $program_file->hashName(), UploadedFile::latest()->first()->program_file);
        Storage::disk('public')->assertExists('user_image/' . $file_image->hashName());
        $response->assertRedirect('/dosarc');
       }
```

### Forum létrehozás teszt

```php
    public function test_forum_create(){
      $response = $this->get("/forum", [
         'title' => 'game',
          'title' => 'game for lövölde',
          'thread' => 'lövölde jatek',
          'description' => 'lövöldözös jatékocska',
          'comment_text' => ' 10kill'
       ]);
       $response->assertRedirect('/forum');
    }
```
