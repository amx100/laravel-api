<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CustomerCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
<<<<<<< HEAD
        return parent::toArray($request);
    }
}
=======
      
        return [
            'data' => CustomerResource::collection($this->collection),
        ]; 
        
    }
}

>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
