<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'drugs';
    protected $primaryKey = 'DRUG_ID';
=======
    protected $primaryKey = 'DRUG_ID';
    public $incrementing = false;

>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
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
