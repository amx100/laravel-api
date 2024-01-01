<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePurchaseHistoryRequest extends FormRequest
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
        ];
    }
}
=======
            'CUSTOMER_ID' => 'sometimes|required|exists:customers,CUSTOMER_ID',
            'DRUG_ID' => 'sometimes|required|exists:drugs,DRUG_ID',
            'PURCHASE_DATE' => 'sometimes|required|date',
            'QUANTITY_PURCHASED' => 'sometimes|required|integer|min:1',
            'TOTAL_BILL' => 'sometimes|required|numeric|min:0',
        ];
    }
}

>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
