<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDrugRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Promenite ovo na true kako biste omogućili pristup metodi
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'NAME' => 'sometimes|string|max:255',
            'TYPE' => 'sometimes|string|max:255',
            'DOSE' => 'sometimes|numeric|min:0',
            'SELLING_PRICE' => 'sometimes|numeric|min:0',
            'EXPIRATION_DATE' => 'sometimes|date',
            'QUANTITY' => 'sometimes|integer|min:0',
        ];
    }
}
