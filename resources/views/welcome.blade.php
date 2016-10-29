<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AusOpen Tickets</title>

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
               <h1>Australian Open 2017</h1>
               <h2>Ben jij erbij?</h2>
               
               @if(!Auth::user())
               <div class="not_logged_in">
                   <div>
                       <a href="{{ url('/register') }}" class="call_to_action">Doe nu mee!</a>
                   </div>

                   <div class="account_yet">
                       Al een account? Ga naar <a href="{{ url('/login') }}">Login</a>
                   </div>
               </div>
               @endif
               
               
               <div class="winners">
                   <h3>Vorige winnaars</h3>
                   Winnaars vorige periode (mag pas zichtbaar zijn als de eerste periode gedaan is
                   
                   <div>
                       <div>
                           <img src="{{ URL::to('/') }}/images/profile_pics/1477646100_profile_pic_lucas.jpg" alt="winner" />
                           <div class="winner_caption">Finn Harries</div>
                       </div>  
                       <div>
                           <img src="{{ URL::to('/') }}/images/profile_pics/1477646100_profile_pic_lucas.jpg" alt="winner" />
                           <div class="winner_caption">Finn Harries</div>
                       </div> 
                       <div>
                           <img src="{{ URL::to('/') }}/images/profile_pics/1477646100_profile_pic_lucas.jpg" alt="winner" />
                           <div class="winner_caption">Finn Harries</div>
                       </div> 
                       <div>
                           <img src="{{ URL::to('/') }}/images/profile_pics/1477646100_profile_pic_lucas.jpg" alt="winner" />
                           <div class="winner_caption">Finn Harries</div>
                       </div>   
                       <div>
                           <img src="{{ URL::to('/') }}/images/profile_pics/1477646100_profile_pic_lucas.jpg" alt="winner" />
                           <div class="winner_caption">Finn Harries</div>
                       </div>
                       <div>
                           <img src="{{ URL::to('/') }}/images/profile_pics/1477646100_profile_pic_lucas.jpg" alt="winner" />
                           <div class="winner_caption">Finn Harries</div>
                       </div>
                   </div>
                   
               </div>
               
               <div class="rules">
                   <h3>Spelregels</h3>
                   Hierin komt ne box met de spelregels enz
                   <div>
                       <p>
                           Wil jij ook kans maken op een plaatsje op de Australian Open 2017?
                       </p>
                       <h4>Hoe werkt het?</h4>
                       <div>
                           Iedereen begint met een basistijd van <strong>60 seconden</strong>.  In die tijd moet je proberen om zoveel mogelijk tennisvragen juist te beantwoorden.  Bij elke vraag heb je <strong>3 mogelijke antwoorden</strong>, waarvan er telkens 1 juist is.  Als je tijd op is, wordt het spel stopgezet en wordt je score bijgehouden.  Herkansen is niet mogelijk, tenzij je een volgende periode terug meespeelt.  Op het einde van elke periode worden de <strong>3 winnaars</strong> met de hoogste score bekend gemaakt en ontvangen zij hun tickets.
                       </div>
                       
                       <h4>FAQ</h4>
                       <div>
                           <div>
                               <div class="question">Hoeveel winnaars zijn er per periode?</div>
                               <div class="answer">3</div>
                           </div>
                           
                           <div>
                               <div class="question">Is herkansen mogelijk?</div>
                               <div class="answer">Niet in dezelfde periode, wel in een andere</div>
                           </div>
                           
                           <div>
                               <div class="question">Welke soort tickets betreft het?</div>
                               <div class="answer">Het gaat om dagtickets voor volwassenen voor de Rod Laver Arena op woensdag 18 januari 2017</div>
                           </div>
                       </div>
                   </div>
               </div>
               
           </div>
           
           
       </div>
        
    </body>
</html>
