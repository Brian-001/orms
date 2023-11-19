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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('size')->default(0)->nullable(); // Assuming its square feet
            $table->decimal('price', 10, 2)->default(0.00)->nullable(); // 10 digits and 2 decimal places
            $table->text('description'); // text for longer description
            $table->string('location', 255)->nullable();
            $table->string('category')->nullable(); // Column for storing category
            $table->string('type')->nullable(); // Column for storing type
            $table->string('image_path')->nullable(); // Column for storing image path
            $table->boolean('published')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
