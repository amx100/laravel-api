<?php

namespace Database\Seeders;

use App\Models\PurchaseHistory;
use Illuminate\Database\Seeder;

class PurchaseHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        PurchaseHistory::factory()->count(4)->create();
    }
}
