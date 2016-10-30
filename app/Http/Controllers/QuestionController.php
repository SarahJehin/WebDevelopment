<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;
use App\Answer;
use App\Period;
use Auth;
use App\User;

class QuestionController extends Controller
{
    //
    /*
    public function get_question()
    {
        $questions = Question::has('answer')->with('answer')->get();
        //dd($questions);
        
        return view('question_game', ['questions' => $questions]);
    }
    */
    
    public function get_question() {
        $question = Question::has('answer')->with('answer')->where('period_id', 1)->first();
        $question_array = $this->get_question_array([], 0);
        return view('question_game', ['question' => $question, 'question_array' => implode(",", $question_array)]);
    }
    
    public function next_question(Request $request) {
        //
        //dd($request);
        $answer = Answer::find($request->answer);
        
        if($answer->is_correct) {
            //dd($answer, "het antwoord is correct, er mag score toegevoegd worden");
            $user = Auth::user();
            $user->quiz_score += 5;
            //dd($user->quiz_score);
            $user->save();
            
        }
        else {
            //dd("foutief antwoord....");
        }
        
        $prev_arr = explode(",", $request->quest_arr);
        //dd($prev_arr);
        $question_array = $this->get_question_array($prev_arr, $request->question_id);
        //dd($question_arr);
        if($question_array != []) {
            $question = Question::has('answer')->with('answer')->where('id', $question_array[1])->first();
            return view('question_game', ['question' => $question, 'question_array' => implode(",", $question_array)]);
        }
        else {
            dd("vragen zijn op");
        }
        
    }
    
    public function get_question_array($array, $id) {
        if($array == []) {
            $questions = Question::has('answer')->with('answer')->where('period_id', 1)->get();
            foreach($questions as $question) {
                array_push($array, $question->id);
            }
        }
        else {
            //remove previous question id from the array
            $array = array_diff($array, array($id));
        }
        return $array;
    }
    
    
    public function get_question_overview() {
        $questions = Question::has('period')->with('period')->get();
        return view('question_overview', ['questions' => $questions]);
    }
    
    public function add_question() {
        
        $periods = Period::all();
        
        return view('create_question', ['periods' => $periods]);
    }
    
    public function create_question(Request $request) {
        //
        //dd($request);
        $image = "";
        $allowed_extensions = ["jpeg", "png"];
        
        /* image must be
        *       checked for extension
        *       moved to directory on server
        *       save path in database
        */
        
        if ($request->hasFile("image") && $request->file("image")->isValid()) {
            
            $file = $request->file("image");
            //check whether file extension is valid
            if (in_array($file->guessClientExtension(), $allowed_extensions)) {
                //the time stamp will be added to uploaded images to prevent identical names
                $timestamp = time();
                //create new file name
                $new_file_name = $timestamp . $file->getClientOriginalName();
                //everything ok? -> save image on server
                $file->move(base_path() . '/public/images/question_images/', $new_file_name);
                $image = $new_file_name;
            }
        }
        
        
        $question = new Question([
            'question' => $request->question,
            'image' => $image,
            'is_active' => 1,
            'period_id' => $request->period_id,
        ]);
        
        $question->save();
        
        $this->create_answer(1, $request->answer1text, $request->answer_is_correct, $question->id);
        $this->create_answer(2, $request->answer2text, $request->answer_is_correct, $question->id);
        $this->create_answer(3, $request->answer3text, $request->answer_is_correct, $question->id);
        
        return redirect('admin/add_question')->with('msg', "Vraag succesvol toegevoegd!");
    }
    
    
    public function create_answer($answer_nr, $answertext, $answer_is_correct, $question_id) {
        //
        if($answer_nr == $answer_is_correct) {
            $is_correct = 1;
        }
        else {
            $is_correct = 0;
        }
        
        $answer = new Answer([
            'answertext' => $answertext,
            'is_active' => 1,
            'is_correct' => $is_correct,
            'question_id' => $question_id,
        ]);

        $answer->save();
    }
    
}
