@extends('layouts.app')

@section('title', 'Deelnemers')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Deelnemerslijst</div>

                <div class="panel-body">
                    
                    @if(Auth::user()->is_admin)
                    <div>
                        <table class="table table-hover">
                            @foreach($participants as $participant)
                            <tr>
                                <td>{{ $participant->first_name }} {{ $participant->last_name }}</td>
                                <td>{{ $participant->quiz_score }}</td>
                                <td>Diskwalificeren!</td>
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