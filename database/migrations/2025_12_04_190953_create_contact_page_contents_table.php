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
        Schema::create('contact_page_contents', function (Blueprint $table) {
            $table->id();

            // Banner Slider Fields
            $table->string('slider1_tagline')->nullable();
            $table->string('slider1_h2')->nullable();
            $table->text('slider1_p')->nullable();
            $table->string('slider2_tagline')->nullable();
            $table->string('slider2_h2')->nullable();
            $table->text('slider2_p')->nullable();
            $table->string('slider3_tagline')->nullable();
            $table->string('slider3_h2')->nullable();
            $table->text('slider3_p')->nullable();

            // Contact Section Fields
            $table->string('contact_tagline')->nullable();
            $table->string('contact_h2')->nullable();
            $table->text('contact_p')->nullable();
            $table->string('contact_link')->nullable();

            // Testimonials Section Fields
            $table->string('testi_h2')->nullable();
            $table->text('testi_p')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_page_contents');
    }
};
