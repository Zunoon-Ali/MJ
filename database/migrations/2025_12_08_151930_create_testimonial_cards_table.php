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
        Schema::create('testimonial_cards', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Testimonial author name
            $table->text('testimonial'); // Testimonial content
            $table->string('image')->nullable(); // Author image path
            $table->integer('order')->default(0); // Display order
            $table->boolean('is_active')->default(true); // Show/hide card
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonial_cards');
    }
};
