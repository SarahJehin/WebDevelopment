@extends('layouts.app')

@section('title', 'Account info')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
            @include('extra_nav')
           
            <div class="panel panel-default">
                <div class="panel-heading">Mijn account</div>

                <div class="panel-body">
                    
                    
                    <div class="user_info">
                        
                        <div class="col-md-8">
                            <form method="POST" action="{{url('user/update_account')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div>
                                    <label>Voornaam:</label>
                                    <input type="text" name="first_name" id="first_name" value="{{ Auth::user()->first_name }}">
                                </div>
                                <div>
                                    <label>Achternaam:</label>
                                    <input type="text" name="last_name" id="last_name" value="{{ Auth::user()->last_name }}">
                                </div>
                                <div>
                                    <label>E-mail:</label>
                                    <input type="text" name="email" id="email" value="{{ Auth::user()->email }}">
                                </div>
                                <div>
                                    <label>Straat:</label>
                                    <input type="text" name="street" id="street" value="{{ Auth::user()->street }}">
                                </div>
                                <div>
                                    <label>Nummer:</label>
                                    <input type="text" name="number" id="number" value="{{ Auth::user()->number }}">
                                </div>
                                <div>
                                    <label>Postcode:</label>
                                    <input type="text" name="zipcode" id="zipcode" value="{{ Auth::user()->zipcode }}">
                                </div>
                                <div>
                                    <label>Stad:</label>
                                    <input type="text" name="city" id="city" value="{{ Auth::user()->city }}">
                                </div>
                                <div>
                                    <label>Land:</label>
                                    <input type="text" name="country" id="country" value="{{ Auth::user()->country }}">
                                </div>
                                <div>
                                    <label>Foto:</label>
                                    <input type="file" name="image" id="image" value="{{ Auth::user()->image }}">
                                </div>
                                <div>
                                    <input type="submit" value="Aanpassen">
                                </div>
                            </form>
                        </div>
                        
                        <div class="col-md-4">
                            <img src="../images/profile_pics/{{  Auth::user()->photo }}" alt="logo">
                            
                            <div class="score">
                                Mijn score : 
                                <div class="amount">
                                    {{ Auth::user()->quiz_score }}
                                </div>
                            </div>
                            
                        </div>
                        
                        
                    </div>
                    
                    
                    
                </div>
            </div>
            {{--
            <div class="panel panel-default">
                <div class="panel-heading">Score en gewonnen tickets</div>
                
                <div class="panel-body">
                    <div>
                        Mijn gewonnen tickets + je score komt hier ook te staan als je al gespeeld hebt.
                        Mijn score : {{ Auth::user()->quiz_score }}
                    </div>
                </div>
                
            </div>
            --}}
        </div>
    </div>
</div>
@endsection