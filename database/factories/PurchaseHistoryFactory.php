<?php



namespace Database\Factories;

use App\Models\PurchaseHistory;
use App\Models\Customer;
use App\Models\Drug;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customer = Customer::factory()->create();
        $drug = Drug::factory()->create();

        return [
            'CUSTOMER_ID' => $customer->CUSTOMER_ID,
            'DRUG_ID' => $drug->DRUG_ID,
            'PURCHASE_DATE' => $this->faker->dateTimeThisDecade,
            'QUANTITY_PURCHASED' => $this->faker->randomNumber,
            'TOTAL_BILL' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
