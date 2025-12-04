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
        Schema::create('about_page_contents', function (Blueprint $table) {
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

            // About Section Fields
            $table->string('about_tagline')->nullable();
            $table->string('about_h2')->nullable();
            $table->text('about_p')->nullable();
            $table->string('about_link')->nullable();
            $table->string('about_img')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_page_contents');
    }
};
