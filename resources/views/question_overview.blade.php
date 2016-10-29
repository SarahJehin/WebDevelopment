@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Vragenoverzicht</div>

                <div class="panel-body">
                    
                    <table class="table">
                        <tr>
                            <th>Periode</th>
                            <th>Vraag</th>
                        </tr>
                        @foreach($questions as $question)
                        <tr>
                            <td>{{ $question->period->period_name }}</td>
                            <td>{{ $question->question }}</td>
                        </tr>
                        @endforeach
                    </table>
                    
                    
                    
                    <div>
                        <a href="{{ url('admin/add_question') }}">Nieuwe vraag toevoegen</a>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection