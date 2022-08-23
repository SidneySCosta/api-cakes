<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoloRequest extends FormRequest
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
            'nome' => ['required', 'string', 'between:2,100'],
            'peso' => ['required'],
            'valor' => ['required'],
            'quantidade' => ['required', 'int']
        ];
    }
}
