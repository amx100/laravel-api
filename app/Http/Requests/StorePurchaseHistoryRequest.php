<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePurchaseHistoryRequest extends FormRequest
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
            'CUSTOMER_ID' => 'required|exists:customers,CUSTOMER_ID',
            'DRUG_ID' => 'required|exists:drugs,DRUG_ID',
            'PURCHASE_DATE' => 'required|date',
            'QUANTITY_PURCHASED' => 'required|integer|min:1',
            'TOTAL_BILL' => 'required|numeric|min:0',
        ];
    }
}
