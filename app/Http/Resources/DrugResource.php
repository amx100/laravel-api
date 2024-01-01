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
<<<<<<< HEAD
            'expiry' => $this->EXPIRY,
=======
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
            'expirationDate' => $this->EXPIRATION_DATE,
            'quantity' => $this->QUANTITY,
        ];
    }
}
