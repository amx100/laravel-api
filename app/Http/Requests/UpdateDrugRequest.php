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
<<<<<<< HEAD
        return false;
=======
        return true; // Promenite ovo na true kako biste omogućili pristup metodi
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            //
=======
            'NAME' => 'sometimes|string|max:255',
            'TYPE' => 'sometimes|string|max:255',
            'DOSE' => 'sometimes|numeric|min:0',
            'SELLING_PRICE' => 'sometimes|numeric|min:0',
            'EXPIRATION_DATE' => 'sometimes|date',
            'QUANTITY' => 'sometimes|integer|min:0',
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
        ];
    }
}
