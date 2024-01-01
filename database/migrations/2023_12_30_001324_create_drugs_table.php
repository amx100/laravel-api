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
        Schema::create('drugs', function (Blueprint $table) {
            $table->id('DRUG_ID');
            $table->string('NAME', 50);
            $table->string('TYPE', 20);
            $table->string('DOSE', 20);
            $table->double('SELLING_PRICE')->unsigned();
            $table->date('EXPIRATION_DATE');
            $table->unsignedInteger('QUANTITY');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drugs');
    }
};