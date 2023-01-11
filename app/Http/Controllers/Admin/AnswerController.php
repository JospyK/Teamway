<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAnswerRequest;
use App\Http\Requests\StoreAnswerRequest;
use App\Http\Requests\UpdateAnswerRequest;
use App\Models\Answer;
use App\Models\Question;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AnswerController extends Controller
{
    public function index()
    {
        $answers = Answer::with(['question'])->get();

        return view('admin.answers.index', compact('answers'));
    }

    public function create()
    {
        $questions = Question::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.answers.create', compact('questions'));
    }

    public function store(StoreAnswerRequest $request)
    {
        $answer = Answer::create($request->all());

        return redirect()->route('admin.answers.index');
    }

    public function edit(Answer $answer)
    {
        $questions = Question::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $answer->load('question');

        return view('admin.answers.edit', compact('answer', 'questions'));
    }

    public function update(UpdateAnswerRequest $request, Answer $answer)
    {
        $answer->update($request->all());

        return redirect()->route('admin.answers.index');
    }

    public function show(Answer $answer)
    {
        $answer->load('question');

        return view('admin.answers.show', compact('answer'));
    }

    public function destroy(Answer $answer)
    {
        $answer->delete();

        return back();
    }

    public function massDestroy(MassDestroyAnswerRequest $request)
    {
        Answer::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
