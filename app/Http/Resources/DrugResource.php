<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DrugResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->DRUG_ID,
            'name' => $this->NAME,
            'type' => $this->TYPE,
            'dose' => $this->DOSE,
            'sellingPrice' => $this->SELLING_PRICE,
            'expiry' => $this->EXPIRY,
            'expirationDate' => $this->EXPIRATION_DATE,
            'quantity' => $this->QUANTITY,
        ];
    }
}
