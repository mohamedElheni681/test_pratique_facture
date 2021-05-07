<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FactureRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'designation' => 'required',
            'price_ht'    => 'required|max:8|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/'
        ];
    }

    public function messages()
    {
        return [
            'designation.required'          => 'La désignation de facture est obligatoire.',
            'price_ht.required'             => 'Le prix HT de facture est obligatoire.',
            'price_ht.max'                  => 'le prix HT doit être 5 chiffres avant la virgule et 2 chiffres après la virgule.',
            'price_ht.regex'                => 'le prix HT doit être 5 chiffres avant la virgule et 2 chiffres après la virgule',
        ];

    }

}
