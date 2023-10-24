<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nota_ingles' => 'numeric|min:0|max:20',
            'vinculacion' => 'numeric|min:0|max:20',
            'pasantias' => 'numeric|min:0|max:20',
        ];
    }
}
