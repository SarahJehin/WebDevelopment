@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

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
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
