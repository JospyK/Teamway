<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function test(Request $request)
    {
        // get all questions with answers from database
        $questions = Question::with('answers')->take(2)->get();

        return view('test', compact('questions'));
    }


    public function process(Request $request)
    {



        $name = $request->name;
        $selected_answer = Answer::whereIn('id', array_values($request->all()))->get();

        $extrovert = 0;
        $introvert = 0;
        $result = '';


        foreach ($selected_answer as $key => $answer) {
            if($answer->type == 'e') {
                $extrovert += $answer->point;
            }
            else {
                $introvert += $answer->point;
            }
        }

        $result = $extrovert > $introvert ? 'Extrovert' : 'Introvert';

        dump($result);
        dd(array_values($request->except('_token')));
        return view('results', compact('result'));
    }


    public function results(Request $request)
    {
        return view('results');
    }

}
