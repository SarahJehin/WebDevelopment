@extends('layouts.app')

@section('title', 'Deelnemer details')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
            @include('extra_nav')
           
            <div class="panel panel-default">
                <div class="panel-heading">Deelnemer details</div>

                <div class="panel-body">
                    
                    
                    <div class="user_info participant">
                        
                        <div class="col-md-8">
                            <div class="info">
                                <div>Voornaam:</div>
                                <div>{{ $participant->first_name }}</div>
                            </div>
                            <div class="info">
                                <div>Achternaam:</div>
                                <div>{{ $participant->last_name }}</div>
                            </div>
                            <div class="info">
                                <div>E-mail:</div>
                                <div>{{ $participant->email }}</div>
                            </div>
                            <div class="info">
                                <div>Straat:</div>
                                <div>{{ $participant->street }}</div>
                            </div>
                            <div class="info">
                                <div>Nummer:</div>
                                <div>{{ $participant->number }}</div>
                            </div>
                            <div class="info">
                                <div>Postcode:</div>
                                <div>{{ $participant->zipcode }}</div>
                            </div>
                            <div class="info">
                                <div>Stad:</div>
                                <div>{{ $participant->city }}</div>
                            </div>
                            <div class="info">
                                <div>Land:</div>
                                <div>{{ $participant->country }}</div>
                            </div>
                            <div class="info">
                                <div>Score:</div>
                                <div>{{ $participant->quiz_score }}</div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <img src="../../images/profile_pics/{{  $participant->photo }}" alt="profile_pic">
                        </div>
                        
                        
                    </div>
                    
                    
                    
                </div>
            </div> 
            
        </div>
    </div>
</div>
@endsection