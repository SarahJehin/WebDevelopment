@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            @include('extra_nav')
           
            <div class="panel panel-default">
                <div class="panel-heading">Welkom {{ Auth::user()->first_name }}</div>

                <div class="panel-body">
                    
                    @if(Auth::user()->is_admin)
                    <div>
                        <div>
                            <a href="{{ url('admin/participants') }}">Deelnemerslijst</a>
                        </div>
                        <div>
                            <a href="{{ url('admin/questions') }}">Vragenoverzicht</a>
                        </div>
                    </div>
                    @else
                    <!--
                    <div>
                        <div>
                            <a href="{{ url('user/play_game') }}">Speel het spel!</a>
                        </div>
                        <div>
                            <a href="#">Spelregels</a>
                        </div>
                        <div>
                            <a href="{{ url('user/account_info') }}">Mijn account</a>
                        </div>
                    </div>
                    -->
                    <div>
                        <p>Kan jij ook niet wachten om naar de Australian Open 2017 te gaan? Dan is deze quiz je kans!</p>
                        <p>Bekijk eerst even de <a href="{{ url('user/rules') }}">spelregels</a>.  Dan weet je wat je kan verwachten en verhoog je je winkansen.  Als je deze hebt doorgenomen ben je helemaal klaar om het spel te spelen!</p>
                        <p>Benieuwd welke score je had en of je gewonnen hebt?  Deze info vind je allemaal terug op je <a href="{{ url('user/account_info') }}">accountpagina</a>.</p>
                    </div>
                    
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
