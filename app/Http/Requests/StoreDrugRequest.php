<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDrugRequest extends FormRequest
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
            'NAME' => 'required|string|max:255',
            'TYPE' => 'required|string|max:255',
            'DOSE' => 'required|string|max:255',
            'SELLING_PRICE' => 'required|numeric|min:0',
            'EXPIRATION_DATE' => 'required|date',
            'QUANTITY' => 'required|integer|min:0',
        ];
    }
}
