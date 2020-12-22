<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class HomeController extends Controller
{
    //
    public function index()
    {   
        $questions = Question::all();
        return view('home', [
            'questions' => $questions
        ]); 
    }
}
