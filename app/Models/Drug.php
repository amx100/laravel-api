<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $primaryKey = 'DRUG_ID';
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'NAME', 
        'TYPE', 
        'DOSE', 
        'SELLING_PRICE', 
        'EXPIRATION_DATE', 
        'QUANTITY'
    ];

    public function purchaseHistory()
    {
        return $this->hasMany(PurchaseHistory::class, 'DRUG_ID');
    }
}
