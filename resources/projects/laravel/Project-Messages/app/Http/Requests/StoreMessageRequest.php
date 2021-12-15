<?php

namespace App\Http\Requests;
use App\Models\Message;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessageRequest extends FormRequest
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
            'author' => ['bail','required','string','max:255'],
            'content' => ['bail','required','string','max:255'],
        ];
    }
}
