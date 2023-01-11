@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.test.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.tests.update", [$test->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.test.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $test->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.test.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="final_result">{{ trans('cruds.test.fields.final_result') }}</label>
                <input class="form-control {{ $errors->has('final_result') ? 'is-invalid' : '' }}" type="text" name="final_result" id="final_result" value="{{ old('final_result', $test->final_result) }}">
                @if($errors->has('final_result'))
                    <div class="invalid-feedback">
                        {{ $errors->first('final_result') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.test.fields.final_result_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="selected_answers">{{ trans('cruds.test.fields.selected_answer') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('selected_answers') ? 'is-invalid' : '' }}" name="selected_answers[]" id="selected_answers" multiple>
                    @foreach($selected_answers as $id => $selected_answer)
                        <option value="{{ $id }}" {{ (in_array($id, old('selected_answers', [])) || $test->selected_answers->contains($id)) ? 'selected' : '' }}>{{ $selected_answer }}</option>
                    @endforeach
                </select>
                @if($errors->has('selected_answers'))
                    <div class="invalid-feedback">
                        {{ $errors->first('selected_answers') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.test.fields.selected_answer_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection