<?php

namespace App\Http\Controllers;

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
        $questions = [];

        return view('test', compact('questions'));
    }

    public function results(Request $request)
    {
        return view('results');
    }

}
