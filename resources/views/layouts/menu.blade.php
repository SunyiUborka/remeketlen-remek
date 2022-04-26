<nav class="navbar">
    @auth
        <div class="nav-item">
            <a href="{{route('home')}}" class="nav-link">Főoldal</a>
        </div>
        <div class="nav-item">
            <a href="{{route('dosearch.home')}}" class="nav-link">Dos Programok megtekintése</a>
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
        <div class="nav-item">
            <div class="nav-link">
            {{\Illuminate\Support\Facades\Auth::user()->username}}
            </div>
        </div>
        <div class="nav-item">
            {{ Form::open(['route' => 'auth.logout', 'class' => 'nav-link']) }}
            {{Form::submit('Kijelentkezés', ['class' => ''])}}
            {{ Form::close() }}
        </div>
    @else
        <div class="nav-item">
            <a href="{{route('auth.login')}}" class="nav-link">Belépés</a>
        </div>
        <div class="nav-item">
            <a href="{{route('register.create')}}" class="nav-link">Regisztráció</a>
        </div>
    @endauth
</nav>