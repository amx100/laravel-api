<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
<<<<<<< HEAD
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('CUSTOMER_ID');
            $table->string('FIRST_NAME', 45);
            $table->string('LAST_NAME', 45);
            $table->date('DOB');
            $table->timestamps();
        });
    }
=======
{
    Schema::create('customers', function (Blueprint $table) {
        $table->id('CUSTOMER_ID')->index(); // Dodaj indeks na CUSTOMER_ID
        $table->string('FIRST_NAME', 45);
        $table->string('LAST_NAME', 45);
        $table->date('DOB');
        $table->timestamps();
    });
}
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};