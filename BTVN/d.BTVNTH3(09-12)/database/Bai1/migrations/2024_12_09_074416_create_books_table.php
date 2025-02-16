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
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('title'); // Tên sách
            $table->string('author');
            $table->year('publication_year'); // Năm xuất bản
            $table->string('genre'); // Thể loại
            $table->foreignId('library_id')->constrained('libraries')->onDelete('cascade'); // Foreign Key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};