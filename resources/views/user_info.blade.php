@extends('layouts.app')

@section('title', 'Account info')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>

                <div class="panel-body">
                    You are logged in!
                    
                    <div>
                        <h2>Jouw gegevens</h2>
                        
                        <div>
                            <form>
                                <div>
                                    <label>Voornaam:</label>
                                    <input type="text" name="first_name" id="first_name" value="{{ Auth::user()->first_name }}">
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    
                    <div>
                        Mijn gewonnen tickets + je score komt hier ook te staan als je al gespeeld hebt
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection