<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class QuizController extends Controller
{
    /**
     * Show the quiz for the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('training/quiz');
    }
}
