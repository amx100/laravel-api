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
    {
        Schema::create('purchase_history', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id('PURCHASE_ID');
            $table->unsignedBigInteger('CUSTOMER_ID');
            $table->unsignedBigInteger('DRUG_ID');
=======
            $table->id('PURCHASE_ID')->index(); // Dodaj indeks na PURCHASE_ID
            $table->unsignedBigInteger('CUSTOMER_ID')->index(); // Dodaj indeks na CUSTOMER_ID
            $table->unsignedBigInteger('DRUG_ID')->index(); // Dodaj indeks na DRUG_ID
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
            $table->timestamp('PURCHASE_DATE')->default(now());
            $table->integer('QUANTITY_PURCHASED');
            $table->double('TOTAL_BILL');
            $table->timestamps();
<<<<<<< HEAD

         
=======
    
            // Foreign keys
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
            $table->foreign('CUSTOMER_ID')->references('CUSTOMER_ID')->on('customers');
            $table->foreign('DRUG_ID')->references('DRUG_ID')->on('drugs');
        });
    }
<<<<<<< HEAD

=======
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_history');
    }
};
