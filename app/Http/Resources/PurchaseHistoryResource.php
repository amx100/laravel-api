<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseHistoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        $customerName = optional($this->customer)->FIRST_NAME . ' ' . optional($this->customer)->LAST_NAME;

        return [
            'id' => $this->PURCHASE_ID,
            'customerId' => $this->CUSTOMER_ID,
            'drugId' => $this->DRUG_ID,
            'purchaseDate' => $this->PURCHASE_DATE,
            'quantityPurchased' => $this->QUANTITY_PURCHASED,
            'totalBill' => $this->TOTAL_BILL,
            'customerName' => $customerName,
        ];
    }
}
