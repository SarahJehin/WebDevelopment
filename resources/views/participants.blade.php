@extends('layouts.app')

@section('title', 'Deelnemers')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            @include('extra_nav')
           
            <div class="panel panel-default">
                <div class="panel-heading">Deelnemerslijst</div>

                <div class="panel-body">
                    
                    @if(Auth::user()->is_admin)
                    <div>
                        <table class="table table-hover">
                            <tr>
                                <th>Naam</th>
                                <th>Score</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($participants as $participant)
                            <tr>
                                <td><a href="{{url('admin/participant_details/'.$participant->id)}}">{{ $participant->first_name }} {{ $participant->last_name }}</a></td>
                                <td>{{ $participant->quiz_score }}</td>
                                @if(!$participant->is_disqualified)
                                <td><a href="{{url('admin/disqualify/'.$participant->id)}}">Diskwalificeren</a></td>
                                @else
                                <td><a href="{{url('admin/requalify/'.$participant->id)}}">Rekwalificeren</a></td>
                                @endif
                                <td><a href="{{url('admin/delete_participant/'.$participant->id)}}">Verwijderen</a></td>
                            </tr>
                            @endforeach
                        </table>
                        
                        
                    </div>
                    @else
                    <div>
                        Only admins can view this page
                    </div>
                    @endif
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection