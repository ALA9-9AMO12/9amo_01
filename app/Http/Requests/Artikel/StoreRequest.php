<?php

namespace App\Http\Requests\Artikel;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'titel' => ['required', 'min:3', 'max:80'],
            'content' => ['required', 'min:25'],
            'afbeelding' => []
        ];
    }
}
