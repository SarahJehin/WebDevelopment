@extends('layouts.app')

@section('title', 'Vraag toevoegen')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            @include('extra_nav')
            
            <div class="panel panel-default">
                <div class="panel-heading">Vraag bewerken</div>

                <div class="panel-body">
                    
                    @if(Auth::user()->is_admin)
                    <div>
                        
                        @if (session('msg'))
                            <div class="msg_info">
                                {{ session('msg') }}
                            </div>
                        @endif
                        
                        <div>
                            <form method="POST" action="{{ url('admin/update_question') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div>
                                    <label for="question">Vraag:</label>
                                    <input type="text" name="question" id="question" value="{{$question->question}}" required>
                                </div>
                                <div>
                                    <label for="image">Afbeelding:</label>
                                    <input type="file" name="image" id="image" value="{{$question->image}}">
                                </div>
                                <div class="answers">
                                    <div>
                                        <label for="answer1text">Antwoord 1:</label>
                                        <input type="text" name="answer1text" id="answer1text" value="{{$question->answer[0]->answertext}}" required>
                                        <input type="radio" name="answer_is_correct" value="1" @if($question->answer[0]->is_correct){{"checked"}}@endif>
                                        <input type="number" name="answer_id1" value="{{$question->answer[0]->id}}" hidden="hidden">
                                    </div>
                                    <div>
                                        <label for="answer2text">Antwoord 2:</label>
                                        <input type="text" name="answer2text" id="answer2text" value="{{$question->answer[1]->answertext}}" required>
                                        <input type="radio" name="answer_is_correct" value="2" @if($question->answer[1]->is_correct){{"checked"}}@endif>
                                        <input type="number" name="answer_id2" value="{{$question->answer[1]->id}}" hidden="hidden">
                                    </div>
                                    <div>
                                        <label for="answer3text">Antwoord 3:</label>
                                        <input type="text" name="answer3text" id="answer3text" value="{{$question->answer[2]->answertext}}" required>
                                        <input type="radio" name="answer_is_correct" value="3" @if($question->answer[2]->is_correct){{"checked"}}@endif>
                                        <input type="number" name="answer_id3" value="{{$question->answer[2]->id}}" hidden="hidden">
                                    </div>
                                </div>
                                <div>
                                    <label for="period_id">Periode:</label>
                                    <select name="period_id" id="period_id">
                                        @foreach($periods as $period)
                                        <option value="{{ $period->id }}" @if($period->id==$question->period_id){{"selected"}}@endif>{{ $period->period_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <input type="number" name="question_id" value="{{$question->id}}" hidden="hidden">
                                </div>
                                
                                <div>
                                    <input type="submit" value="Vraag aanpassen">
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