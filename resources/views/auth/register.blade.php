@extends('layouts.app')

@section('title', 'Registreren')

@section('content')
<div class="container">
    
    <div>
        Registreer je nu en maak kans op 5 duo-tickets voor de Australian Open van 2017!
    </div>
    
    <form  role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
        {{ csrf_field() }}


            <div>
                <label for="first_name">Voornaam</label>
                <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus>
                @if ($errors->has('first_name'))
                        <strong>{{ $errors->first('first_name') }}</strong>
                @endif
            </div>
            

            <div>
                <label for="last_name">Achternaam</label>
                <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required autofocus>
                @if ($errors->has('last_name'))
                    <strong>{{ $errors->first('last_name') }}</strong>
                @endif
            </div>
            
            <div>
                <label for="email" >E-Mail</label>
                <input id="email" type="email"  name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <strong>{{ $errors->first('email') }}</strong>
                @endif
            </div>

            <div>
                <label for="street">Straat</label>
                <input id="street" type="text" name="street" value="{{ old('street') }}" required autofocus>
                @if ($errors->has('street'))
                    <strong>{{ $errors->first('street') }}</strong>
                @endif
            </div>
            
            <div>
                <label for="number">Nummer</label>
                <input id="number" type="text" name="number" value="{{ old('number') }}" required autofocus>
                @if ($errors->has('number'))
                    <strong>{{ $errors->first('number') }}</strong>
                @endif
            </div>
            
            <div>
                <label for="zipcode">Postcode</label>
                <input id="zipcode" type="text" name="zipcode" value="{{ old('zipcode') }}" required autofocus>
                @if ($errors->has('zipcode'))
                    <strong>{{ $errors->first('zipcode') }}</strong>
                @endif
            </div>
            
            <div>
                <label for="city">Stad</label>
                <input id="city" type="text" name="city" value="{{ old('city') }}" required autofocus>
                @if ($errors->has('city'))
                    <strong>{{ $errors->first('city') }}</strong>
                @endif
            </div>

            <div>
                <label for="country">Land</label>
                <input id="country" type="text" name="country" value="{{ old('country') }}" required autofocus>
                @if ($errors->has('country'))
                    <strong>{{ $errors->first('country') }}</strong>
                @endif
            </div>


            <div>
                <label for="photo">Foto <span>(Deze foto wordt gepubliceerd als je één van de winnaars bent)</span></label>
                <input type="file" id="photo" name="photo">
                @if ($errors->has('photo'))
                    <strong>{{ $errors->first('photo') }}</strong>
                @endif
            </div>
            

            <div>
                <label for="password">Password</label>
                <input id="password" type="password"  name="password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            


             <div>
                 <label for="password-confirm" >Confirm Password</label>
                 <input id="password-confirm" type="password"  name="password_confirmation" required>
                 @if ($errors->has('password_confirmation'))
                         <strong>{{ $errors->first('password_confirmation') }}</strong>
                 @endif
             </div>

            



                <button type="submit">
                    Speel mee!
                </button>

    </form>
    
    <!--
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    -->
</div>
@endsection
