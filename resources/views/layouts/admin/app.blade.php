<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
   <div id="app">
       <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background-color:#6c3524; color:#fefefe;">
           <div class="container">
               <a class="navbar-brand" style="color:#fefefe; font-size:1.4em" href="{{ route('admin.index') }}" >
                   {{ config('app.name', 'Laravel') }}
               </a>
               <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                   <span class="navbar-toggler-icon" ></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <!-- Left Side Of Navbar -->
                   <ul class="navbar-nav mr-auto">

                   </ul>

                   <!-- Right Side Of Navbar -->
                   <ul class="navbar-nav ml-auto" >
                       <!-- Authentication Links -->
                       @unless (Auth::guard('admin')->check())
                           <li class="nav-item">
                               <a class="nav-link" style="color:#fefefe;"  href="{{ route('admin.login') }}">{{ __('管理者としてログイン') }}</a>
                           </li>
                           @if (Route::has('admin.register'))
                               <li class="nav-item">
                                   <a class="nav-link" style="color:#fefefe;"  href="{{ route('admin.register') }}">{{ __('管理者登録') }}</a>
                               </li>
                           @endif
                       @else
                           <li class="nav-item dropdown">
                               <a id="navbarDropdown" style="color:#fefefe;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }} <span class="caret"></span>
                               </a>

                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                   onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                       {{ __('管理者ページをログアウト') }}
                                   </a>

                                   <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>
                                  
                               </div>
                           </li>
                       @endguest


                   </ul>
               </div>
           </div>
       </nav>

       <main class="py-4">
           @yield('content')
       </main>

       <footer class="footer_design" style="background-color:#6c3524;">
       @guest
           <p class="nav-item" style="display:inline;">
               {{-- <a class="nav-link" href="{{ route('admin.login') }}" style="color:#fefefe; display:inline;">{{ __('ログイン') }}</a> --}}
           @if (Route::has('register'))
                <a class="nav-link" href="{{ route('admin.register') }}" style="color:#fefefe; display:inline;">{{ __('管理者登録') }}</a>
               </p>
           @endif       
       @endguest
       <br>
       <div style="margin-top:24px;">
       ダンディになりたいなら<br>
       <p style="font-size:2.4em">マダム M</p><br>
       </div>
   </footer>
   </div>
</body>
</html>