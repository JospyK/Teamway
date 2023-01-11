<?php

namespace App\Http\Requests;

use App\Models\Test;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTestRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'final_result' => [
                'string',
                'nullable',
            ],
            'selected_answers.*' => [
                'integer',
            ],
            'selected_answers' => [
                'array',
            ],
        ];
    }
}
