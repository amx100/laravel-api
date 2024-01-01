<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'customers';
    protected $primaryKey = 'CUSTOMER_ID';
=======
    protected $primaryKey = 'CUSTOMER_ID';
    public $incrementing = false;
    

>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
    public $timestamps = false;

    protected $fillable = [
        'FIRST_NAME', 
        'LAST_NAME', 
        'DOB'
    ];

    public function purchaseHistory()
    {
        return $this->hasMany(PurchaseHistory::class, 'CUSTOMER_ID');
    }
}
