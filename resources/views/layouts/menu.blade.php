 @auth
     <nav class="navbar">
         <a href="{{route('home')}}" class="nav-icon">
             <i class='bx bx-home' ></i>
             <span class="tooltip">Kezdőlap</span>
         </a>
         <a href="" class="nav-icon">
             <i class='bx bx-search-alt'></i>
             <span class="tooltip">Kereső</span>
         </a>

         <a href="{{route('dosarc.filestore')}}" class="nav-icon">
             <i class='bx bx-upload' ></i>
             <span class="tooltip">Feltöltés</span>
         </a>
         <a href="" class="nav-icon">
             <i class='bx bx-conversation' ></i>
             <span class="tooltip">Fórum</span>
         </a>
         <a href="{{route('user.show')}}" class="nav-icon">
             <i class='bx bx-user'></i>
             <span class="tooltip">Profil</span>
         </a>
         {{ Form::open(['route' => 'auth.logout']) }}
             <button class="nav-icon">
                 <i class='bx bx-power-off'></i>
                 <span class="tooltip">Kijelentkezés</span>
             </button>
         {{ Form::close() }}
     </nav>
 @else

 @endauth
