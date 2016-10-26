<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
       <!--
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif
        </div>
        -->
       <header>
           <div>
               <a href="welcome.blade.php"><img src="{{ asset('images/general/logo_blue.png') }}" alt="logo"></a>
           </div>
       </header>
       
       <div class="content wrapper">
          <!--
           <div class="title m-b-md">
               Laravel
           </div>

           <div class="links">
               <a href="https://laravel.com/docs">Documentation</a>
               <a href="https://laracasts.com">Laracasts</a>
               <a href="https://laravel-news.com">News</a>
               <a href="https://forge.laravel.com">Forge</a>
               <a href="https://github.com/laravel/laravel">GitHub</a>
           </div>
           -->
           
           <div>
               <h1 class="test">Australian Open 2017</h1>
               <h2>Ben jij erbij?</h2>
               <div>
                   <a href="{{ url('/register') }}" class="call_to_action">Doe nu mee!</a>
               </div>
               <div>
                   Al een account? Ga naar <a href="{{ url('/login') }}">Login</a>
               </div>
               
               <div class="winners">
                   Winnaars vorige periode (mag pas zichtbaar zijn als de eerste periode gedaan is
               </div>
               
               <div class="rules">
                   Hierin komt ne box met de spelregels enz
               </div>
               
           </div>
           
           
       </div>
        
    </body>
</html>
