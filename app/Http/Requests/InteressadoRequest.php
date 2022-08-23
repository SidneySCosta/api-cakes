<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InteressadoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'email' => ['required', 'string', 'between:10,100'],
            'bolo_id' => ['required', 'int', 'exists:bolos,id']

        ];
    }
}
