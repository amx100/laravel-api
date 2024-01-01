<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PurchaseHistoryResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->CUSTOMER_ID,
            'firstName' => $this->FIRST_NAME,
            'lastName' => $this->LAST_NAME,
            'DateOfBirth' => $this->DOB,
            'purchaseHistory' => PurchaseHistoryResource::collection($this->whenLoaded('purchaseHistory')),
        ];
    }
}
