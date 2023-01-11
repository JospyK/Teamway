<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTestRequest;
use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;
use App\Models\Answer;
use App\Models\Test;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::with(['selected_answers'])->get();

        return view('admin.tests.index', compact('tests'));
    }

    public function create()
    {
        $selected_answers = Answer::pluck('name', 'id');

        return view('admin.tests.create', compact('selected_answers'));
    }

    public function store(StoreTestRequest $request)
    {
        $test = Test::create($request->all());
        $test->selected_answers()->sync($request->input('selected_answers', []));

        return redirect()->route('admin.tests.index');
    }

    public function edit(Test $test)
    {
        $selected_answers = Answer::pluck('name', 'id');

        $test->load('selected_answers');

        return view('admin.tests.edit', compact('selected_answers', 'test'));
    }

    public function update(UpdateTestRequest $request, Test $test)
    {
        $test->update($request->all());
        $test->selected_answers()->sync($request->input('selected_answers', []));

        return redirect()->route('admin.tests.index');
    }

    public function show(Test $test)
    {
        $test->load('selected_answers');

        return view('admin.tests.show', compact('test'));
    }

    public function destroy(Test $test)
    {
        $test->delete();

        return back();
    }

    public function massDestroy(MassDestroyTestRequest $request)
    {
        Test::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
