<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Name of the category
            $table->text('description')->nullable(); // Optional description
            $table->timestamps(); // Created_at and updated_at columns
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
