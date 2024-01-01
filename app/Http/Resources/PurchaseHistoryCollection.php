<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PurchaseHistoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
<<<<<<< HEAD
        return parent::toArray($request);
=======
        return [
            'data' => PurchaseHistoryResource::collection($this->collection),
        ];
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
    }
}
