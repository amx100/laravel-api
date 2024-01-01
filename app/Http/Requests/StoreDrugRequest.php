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
<<<<<<< HEAD
        return false;
=======
        return true; 
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
            'NAME' => 'required|string|max:255',
            'TYPE' => 'required|string|max:255',
            'DOSE' => 'required|string|max:255',
            'SELLING_PRICE' => 'required|numeric|min:0',
            'EXPIRATION_DATE' => 'required|date',
            'QUANTITY' => 'required|integer|min:0',
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
        ];
    }
}
