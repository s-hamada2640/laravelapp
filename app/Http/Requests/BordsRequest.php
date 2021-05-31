<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BordsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'title' => 'max:50',
            'comment' => 'required|max:300',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '※必須項目です。',
            'name.max:50' => '※50字以内で入力してください。',
            'title.max:50' => '※50字以内で入力してください。',
            'comment.required' => '※必須項目です。',
            'comment.max:300' => '※300字以内で入力してください。',
        ];
    }
}
