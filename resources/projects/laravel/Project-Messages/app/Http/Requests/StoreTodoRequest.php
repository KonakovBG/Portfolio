<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTodoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['bail','required','string','max:255'],
            'author' => ['bail','required','string','max:255'],
            'content' => ['bail','required','string','max:255'],
            'status' => ['bail','required','string','max:255'],
        ];
    }
}
