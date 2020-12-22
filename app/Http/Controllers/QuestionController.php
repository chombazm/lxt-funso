<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    //
    public function showQuestion($id)
    {
        $question = Question::findOrFail($id);
        return view('/question', [
            'question' => $question
        ]);
    }
    public function addQuestion(Request $request)
    {
        $question = new Question();
        $question->topic = $request->topic;
        $question->content = $request->content;

        $question->save();

        return redirect('/');
    }
}
