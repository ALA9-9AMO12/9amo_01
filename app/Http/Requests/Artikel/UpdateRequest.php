<?php

namespace App\Http\Requests\Artikel;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
         *
         * Return validation rules for the form responsible for editing articles.
         *
         * @return array
         */
        public function rules()
    {
        return [
            'artikelID' => ['required', Rule::unique('artikelen', 'artikelID')->ignore(route('artikel')->artikelID)],
            'titel' => ['required', 'min:3', 'max:80'],
            'content' => ['required', 'min:10']
        ];
    }
}
