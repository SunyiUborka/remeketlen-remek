<nav class="navbar">
    <div class="nav-item">
        <a href="{{route('home')}}" class="nav-link">Kezdőlap</a>
    </div>
    @can('create-belep')
    <div class="nav-item">
        <a href="{{route('dosearch.home')}}" class="nav-link">Dos Programok</a>
    </div>

        <div class="nav-item">
            <a href="{{route('dosearch.upload')}}" class="nav-link">Dos Program feltöltése</a>
        </div>

        <div class="nav-item">
            <a href="{{route('dosearch.forum')}}" class="nav-link">Fórum</a>
        </div>

        <div class="nav-item">
            <a href="{{route('dosearch.datasheet')}}" class="nav-link">Adatlapom</a>
        </div>


    @endcan


    
    @auth

    Üdv {{Illuminate\Support\Facades\Auth::user()->username}}
   <!-- <a href class="btn btn-light" type="button">Kijelentkezés</a> -->
   
    <form class="form-inline" action="{{route('auth.logout')}}" method="POST">
   @csrf
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Kijelentkezés</button>
    </form>


    @else
    <div class="nav-item">
        <a href="{{route('auth.login')}}" class="nav-link">Belépés</a>
    </div>
    <div class="nav-item">
        <a href="{{route('register.create')}}" class="nav-link">Regisztráció</a>
    </div>

    @endauth
</nav>
