<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'CUSTOMER_ID';
    public $incrementing = false;
    

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
