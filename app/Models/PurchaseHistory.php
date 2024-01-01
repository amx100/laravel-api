<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseHistory extends Model
{
    use HasFactory;

    protected $table = 'purchase_history';
    protected $primaryKey = 'PURCHASE_ID';
    

    protected $fillable = [
        'CUSTOMER_ID', 
        'DRUG_ID', 
        'PURCHASE_DATE', 
        'QUANTITY_PURCHASED', 
        'TOTAL_BILL'
    ];

    public function drug()
    {
        return $this->belongsTo(Drug::class, 'DRUG_ID');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CUSTOMER_ID');
    }
}
