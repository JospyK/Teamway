<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Test;
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
        $selected_answer = Answer::whereIn('id', array_values($request->except('_token')))->get();

        $extrovert = 0;
        $introvert = 0;

        foreach ($selected_answer as $key => $answer) {
            if($answer->type == 'e') {
                $extrovert++;
            }
            else {
                $introvert++;
            }
        }

        $result = $extrovert > $introvert ? 'Extrovert' : 'Introvert';

        $test = [];
        if($request->name) {
            $test = Test::create([
                'name' => $request->name,
                'final_result' => $result,
            ]);
            $test->selected_answers()->sync($request->input('selected_answers', array_values($request->except(['_token', 'name']))));
        }

        return view('results', compact('result', 'test'));
    }


    public function results(Request $request)
    {
        return view('results');
    }

}
