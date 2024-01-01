<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseHistory extends Model
{
    use HasFactory;

    protected $primaryKey = 'PURCHASE_ID';
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'CUSTOMER_ID', 
        'DRUG_ID', 
        'PURCHASE_DATE', 
        'QUANTITY_PURCHASED', 
        'TOTAL_BILL'
    ];

    protected $with = ['customer', 'drug'];

    public function drug()
    {
        return $this->belongsTo(Drug::class, 'DRUG_ID', 'DRUG_ID');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CUSTOMER_ID', 'CUSTOMER_ID');
    }
}
