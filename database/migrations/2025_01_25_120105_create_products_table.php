<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Product name
            $table->decimal('price', 10, 2); // Product price
            $table->text('description')->nullable(); // Optional description
            $table->unsignedBigInteger('categorie_id'); // Foreign key to categories table
            $table->timestamps(); // Created_at and updated_at columns

            // Define foreign key relationship
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
