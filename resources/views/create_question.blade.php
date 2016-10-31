@extends('layouts.app')

@section('title', 'Vraag toevoegen')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            @include('extra_nav')
            
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>

                <div class="panel-body">
                    
                    @if(Auth::user()->is_admin)
                    <div>
                        
                        @if (session('msg'))
                            <div class="msg_info">
                                {{ session('msg') }}
                            </div>
                        @endif
                        
                        <div>
                            <form method="POST" action="{{ url('admin/create_question') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div>
                                    <label for="question">Vraag:</label>
                                    <input type="text" name="question" id="question" required>
                                </div>
                                <div>
                                    <label for="image">Afbeelding:</label>
                                    <input type="file" name="image" id="image">
                                </div>
                                <div class="answers">
                                    <div>
                                        <label for="answer1text">Antwoord 1:</label>
                                        <input type="text" name="answer1text" id="answer1text" required>
                                        <input type="radio" name="answer_is_correct" value="1" checked>
                                    </div>
                                    <div>
                                        <label for="answer2text">Antwoord 2:</label>
                                        <input type="text" name="answer2text" id="answer2text" required>
                                        <input type="radio" name="answer_is_correct" value="2">
                                    </div>
                                    <div>
                                        <label for="answer3text">Antwoord 3:</label>
                                        <input type="text" name="answer3text" id="answer3text" required>
                                        <input type="radio" name="answer_is_correct" value="3">
                                    </div>
                                </div>
                                <div>
                                    <label for="period_id">Periode:</label>
                                    <select name="period_id" id="period_id">
                                        @foreach($periods as $period)
                                        <option value="{{ $period->id }}">{{ $period->period_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <input type="submit" value="Vraag opslagen">
                                </div>
                                
                            </form>
                        </div>
                        
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