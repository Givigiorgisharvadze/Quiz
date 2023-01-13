<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\answers;
use App\Models\questions;
use App\Models\quizs;
use Illuminate\Support\Facades\DB;
use Auth;

class quizsController extends Controller
{
    public function quizs ($id) {
        $quizs = Quiz::find($id);
        return view('edits',['quizs' => $quizs]);
    }
    public function quizAndQuestions ($id) {


        $quizs = Quiz::find($id);
        $questions = $quizs->questions()->with(['answers' => function($query) use($id) {
            $query->where('idOfQuiz',$id);
        }])->get();
        
        $data= $post->withCount('questions')->get('id');
        $datas = $total1->sum('all_questions');
        return view('quizeditpage',['quizs' => $quizs,'questions'=> $questions,'datas' => $datas,]);
    }

    public function private_questions () {
        $info = DB::table('quizs')->where('private_quiz', '=' , '1')->where('idOfAdmin','=', auth()->user()->id)->orderByDesc('created_at')->get();
        $data = Quiz::withCount('questions')->where('private_quiz', '=' , '1')->get();
        $datas = $total1->sum('all_questions');
        return view('quizs' , ['info' => $info,'datas' => $datas]);
    }
    public function questions () {
        $info = DB::table('quizs')->orderByDesc('created_at')->where('private_quiz', '=' , '0')->get();
        $data = Quiz::withCount('questions')->get();
        $datas = $data->sum('all_questions');
        return view('quizs' , ['info' => $info,'datas' => $datas]);
    }


    public function del (Quiz $del) {
        $del->answers()->delete();
        $del->questions()->delete();

        return redirect()->route('quizs.questions');
    }

    public function edit (Quiz $quiz_edit) {
        $quiz_edit->private_quiz = '0';
        $quiz_edit->save();
        return redirect()->route('quizs.questions'); 
    }

    public function create (Request $request,Quiz $item) {
        $questions = $item->questions()->with(['answers' => function($query) use($item) {
            $query->where('idOfQuiz',$item);
        }])->get();
        
    if ($request->input("name")) {
            $item->fill($request->all())->save();
            if ($request->input("name")) {
                $item->fill($request->all())->save();
                return redirect()->route('quizs.private_questions');
        }
    }
    return view('edit', ["item" => $item]);
}
    public function adminquizs () {
    $quizs = Quiz::all();
    return view('adminquiz',["quizs" => $quizs]);
}
    public function adminquestions (Request $request) {
        $questions = Question::all();
        return view('adminquestions',["questions" => $questions]);
    
    }
}
