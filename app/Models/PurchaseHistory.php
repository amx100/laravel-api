<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseHistory extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'purchase_history';
    protected $primaryKey = 'PURCHASE_ID';
    
=======
    protected $primaryKey = 'PURCHASE_ID';
    public $incrementing = false;

    public $timestamps = false;
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d

    protected $fillable = [
        'CUSTOMER_ID', 
        'DRUG_ID', 
        'PURCHASE_DATE', 
        'QUANTITY_PURCHASED', 
        'TOTAL_BILL'
    ];

<<<<<<< HEAD
    public function drug()
    {
        return $this->belongsTo(Drug::class, 'DRUG_ID');
=======
    protected $with = ['customer', 'drug'];

    public function drug()
    {
        return $this->belongsTo(Drug::class, 'DRUG_ID', 'DRUG_ID');
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
    }

    public function customer()
    {
<<<<<<< HEAD
        return $this->belongsTo(Customer::class, 'CUSTOMER_ID');
=======
        return $this->belongsTo(Customer::class, 'CUSTOMER_ID', 'CUSTOMER_ID');
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
    }
}
