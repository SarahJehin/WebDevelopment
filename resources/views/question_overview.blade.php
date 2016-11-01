@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            @include('extra_nav')
            
            <div class="panel panel-default">
                <div class="panel-heading">Vragenoverzicht</div>

                <div class="panel-body">
                    
                    @if (session('msg'))
                        <div class="msg_info">
                            {{ session('msg') }}
                        </div>
                    @endif
                    
                    <table class="table table-hover">
                        <tr>
                            <th>Periode</th>
                            <th>Vraag</th>
                            <th></th>
                        </tr>
                        @foreach($questions as $question)
                        <tr>
                            <td>{{ $question->period->period_name }}</td>
                            <td>{{ $question->question }}</td>
                            <td><a href="{{url('admin/edit_question/'.$question->id)}}">Bewerken</a></td>
                        </tr>
                        @endforeach
                    </table>
                    
                    {{ $questions->links() }}
                    
                    
                    <div>
                        <a href="{{ url('admin/add_question') }}">Nieuwe vraag toevoegen</a>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection