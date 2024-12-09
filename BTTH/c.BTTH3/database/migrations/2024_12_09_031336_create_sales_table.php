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
        Schema::create('sales', function (Blueprint $table) {
            $table->id('sale_id'); // PRIMARY KEY
            $table->unsignedBigInteger('medicine_id'); // FOREIGN KEY
            $table->integer('quantity'); // Số lượng bán
            $table->dateTime('sale_date'); // Ngày bán
            $table->string('customer_phone', 10)->nullable(); // Số điện thoại

            // Foreign key constraint
            $table->foreign('medicine_id')->references('medicine_id')->on('medicines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};