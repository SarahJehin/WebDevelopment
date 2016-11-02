@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            @if(!Auth::user()->is_disqualified)
            @include('extra_nav')
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Welkom {{ Auth::user()->first_name }}</div>

                <div class="panel-body">
                    
                    @if (session('msg'))
                        <div class="msg_info">
                            {{ session('msg') }}
                        </div>
                    @endif
                    
                    @if(Auth::user()->is_admin)
                    <div>
                        <p>Op dit admindashboard kan je de periodes van de wedstrijd instellen.  Daarnaast kan je ook de vragen en de deelnemers beheren.</p>
                    </div>
                    @else
                    @if(Auth::user()->is_disqualified)
                    <div>
                        Sorry je bent gediskwalificeerd en kan deze pagina dus niet meer bekijken.
                    </div>
                    @else
                    <div>
                        <p>Kan jij ook niet wachten om naar de Australian Open 2017 te gaan? Dan is deze quiz je kans!</p>
                        <p>Bekijk eerst even de <a href="{{ url('user/rules') }}">spelregels</a>.  Dan weet je wat je kan verwachten en verhoog je je winkansen.  Als je deze hebt doorgenomen ben je helemaal klaar om het spel te spelen!</p>
                        <p>Benieuwd welke score je had en of je gewonnen hebt?  Deze info vind je allemaal terug op je <a href="{{ url('user/account_info') }}">accountpagina</a>.</p>
                    </div>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
