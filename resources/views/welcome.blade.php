<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AusOpen Tickets</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet">
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
               <a href="{{url('/')}}"><img src="{{ asset('images/general/logo_blue.png') }}" alt="logo"></a>
           </div>
           <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::user())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{url('home')}}">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
           
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
               @else
               <div class="logged_in">
                   <div>
                       <a href="{{ url('/home') }}" class="call_to_action">Mijn account</a>
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
                   @include('rules')
               </div>
               
               <div class="faq">
                   <h3>FAQ</h3>
                   <div>
                       <div>
                           <div class="question">Hoeveel winnaars zijn er per periode?</div>
                           <div class="answer">Er zijn 3 winnaars per periode.  Er worden dus in totaal 6 tickets per periode uitgereikt.</div>
                       </div>
                       
                       <div>
                           <div class="question">Is herkansen mogelijk?</div>
                           <div class="answer">Niet in dezelfde periode, wel in een andere periode.</div>
                       </div>
                       
                       <div>
                           <div class="question">Welke soort tickets betreft het?</div>
                           <div class="answer">Het gaat om duo dagtickets voor volwassenen voor de Rod Laver Arena op woensdag 18 januari 2017. De tickets zijn ter waarde van &euro;60 per stuk (&euro;120 per duoticket).</div>
                       </div>
                   </div>
               </div>
               
           </div>
           
           
       </div>
       
       <footer>
           &copy;2017 Australian Open
       </footer>
        
        <script src="/js/app.js"></script>
    </body>
</html>
