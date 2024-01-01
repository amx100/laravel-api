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
            $table->id('PURCHASE_ID')->index(); // Dodaj indeks na PURCHASE_ID
            $table->unsignedBigInteger('CUSTOMER_ID')->index(); // Dodaj indeks na CUSTOMER_ID
            $table->unsignedBigInteger('DRUG_ID')->index(); // Dodaj indeks na DRUG_ID
            $table->timestamp('PURCHASE_DATE')->default(now());
            $table->integer('QUANTITY_PURCHASED');
            $table->double('TOTAL_BILL');
            $table->timestamps();
    
            // Foreign keys
            $table->foreign('CUSTOMER_ID')->references('CUSTOMER_ID')->on('customers');
            $table->foreign('DRUG_ID')->references('DRUG_ID')->on('drugs');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_history');
    }
};
