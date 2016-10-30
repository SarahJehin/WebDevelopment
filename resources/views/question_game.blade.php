<?php 
session_start(); 

//unset($_SESSION['endOfTimer']);


if (!isset($_SESSION['time_of_' . Auth::user()->id])){ 
    $endOfTimer = time() + 30; 
    $_SESSION['time_of_' . Auth::user()->id] = $endOfTimer; 
} 

if(($_SESSION['time_of_' . Auth::user()->id] - time()) < 0) { 
      $timeTilEnd = 0; 
} 
else { 
      $timeTilEnd = $_SESSION['time_of_' . Auth::user()->id] - time(); 
} 

if($timeTilEnd <= 0) {  
session_destroy(); 
} 

?> 


@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            @include('extra_nav')
            
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>

                <div class="panel-body">
                    
                    {{--
                    @foreach($questions as $question)
                    <div class="question">
                        <div class="image">
                            <img src="{{ asset('images/question_images/' . $question->image) }}" alt="question_img">
                        </div>
                        
                        <div class="question">
                            {{ $question->question }}
                        </div>
                        
                        <div class="answers">
                            @foreach($question->answer as $answer)
                            <div>
                                <input id="{{ 'answer' . $answer->id }}" type="radio" name="{{ 'answer' . $question->id }}" value="{{ $answer->id }}">
                                <label for="{{ 'answer' . $answer->id }}">{{ $answer->answertext }}</label>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                    @endforeach
                    --}}
                    
                    
                    @if($played)
                    <div>
                        Je hebt al meegespeeld.  Volgende periode terug een kans!
                    </div>
                    
                    @else
                    <div>
                        You have <span id="timer"><?php echo $timeTilEnd; ?></span> seconds left.
                    </div>
                    
                    <div class="question">
                        <div class="image">
                            <img src="{{ asset('images/question_images/' . $question->image) }}" alt="question_img">
                        </div>
                        
                        <div class="question">
                            {{ $question->question }}
                        </div>
                        
                        <div class="answers">
                            <form method="POST" action="{{ url('user/next_question') }}">
                                {{ csrf_field() }}
                                <input type="number" name="question_id" value="{{ $question->id }}" hidden="hidden">
                                <input type="text" name="quest_arr" value="{{$question_array}}" hidden="hidden">
                                @foreach($question->answer as $answer)
                                <div>
                                    <button name="answer" value="{{ $answer->id }}">{{ $answer->answertext }}</button>
                                </div>
                                @endforeach
                            </form>
                        </div>
                        
                    </div>
                    @endif
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript"> 
    var TimeLeft = <?php echo $timeTilEnd; ?>; 

    @if(!$played)
    function countdown() 
    { 
          if(TimeLeft > 0) { 
                TimeLeft -= 1; 
                document.getElementById('timer').innerHTML = TimeLeft; 
          } 
    if(TimeLeft < 1) { 
                window.location = '{{url("home")}}'; 
          } 
    } 
    CountFunc = setInterval(countdown,1000); 
    @endif
</script>

@endsection