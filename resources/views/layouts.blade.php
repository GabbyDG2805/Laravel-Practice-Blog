<!doctype html>
 <html lang="{{ app()->getLocale() }}">
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">

         <title>Blog</title>

         <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="\css/layouts.css">

     </head>
     <body>
         <div class="flex-center position-ref">
             @if (Route::has('login'))
                 <div class="top-right links">
                     @auth
                         <a href="{{ url('/home') }}">Home</a>
                     @else
                         <a href="{{ route('login') }}">Login</a>
                         <a href="{{ route('register') }}">Register</a>
                     @endauth
                 </div>
             @endif

             <div class="content">
                 <div class="title m-b-md">
                     Blog
                 </div>

                 @include('Partials.nav')

             </div>
         </div>
         <div class="content">
         	@yield('content')
         <div class="content">
     </body>
 </html>