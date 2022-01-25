<header>
   <div class="container p-3">
      <ul class="nav nav-pills">
         <li class="nav-item">
           <a class="nav-link {{(Route::currentRouteName() === 'home') ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">BluVacanze</a>
         </li>
         <li class="nav-item">
           <a class="nav-link {{(Route::currentRouteName() === 'destinazioni') ? 'active' : ''}}" href="{{route('destinazioni')}}">Destinazioni</a>
         </li>
         <li class="nav-item">
           <a class="nav-link {{(Route::currentRouteName() === 'servizi') ? 'active' : ''}}" href="{{route('servizi')}}">Servizi</a>
         </li>
         <li class="nav-item">
           <a class="nav-link {{(Route::currentRouteName() === 'news') ? 'active' : ''}}" href="{{route('news')}}">News</a>
         </li>
         <li class="nav-item">
           <a class="nav-link {{(Route::currentRouteName() === 'contatti') ? 'active' : ''}}" href="{{route('contatti')}}">Contatti</a>
         </li>
       </ul>
   </div>
</header>