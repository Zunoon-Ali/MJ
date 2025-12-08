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
        Schema::table('home_page_contents', function (Blueprint $table) {
            // Change all paragraph and long text fields from string to text
            $table->text('home_banner_leftCard_textpath')->nullable()->change();
            $table->text('home_banner_leftCard_p')->nullable()->change();
            $table->text('home_banner_middleCard_span')->nullable()->change();
            $table->text('home_banner_rightCard_textpath')->nullable()->change();

            $table->text('home_about_p1')->nullable()->change();
            $table->text('home_about_p2')->nullable()->change();

            $table->text('home_product_p')->nullable()->change();

            $table->text('home_store_p1')->nullable()->change();
            $table->text('home_store_p2')->nullable()->change();

            $table->text('home_tatto_cont_p1')->nullable()->change();
            $table->text('home_tatto_cont_p2')->nullable()->change();
            $table->text('home_tatto_cont_card1_p')->nullable()->change();
            $table->text('home_tatto_cont_card2_p')->nullable()->change();
            $table->text('home_tatto_cont_card3_p')->nullable()->change();

            $table->text('home_testimonials_p')->nullable()->change();
            $table->text('home_testimonials_card_p')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_page_contents', function (Blueprint $table) {
            // Revert back to string (not recommended, but needed for rollback)
            $table->string('home_banner_leftCard_textpath')->nullable()->change();
            $table->string('home_banner_leftCard_p')->nullable()->change();
            $table->string('home_banner_middleCard_span')->nullable()->change();
            $table->string('home_banner_rightCard_textpath')->nullable()->change();

            $table->string('home_about_p1')->nullable()->change();
            $table->string('home_about_p2')->nullable()->change();

            $table->string('home_product_p')->nullable()->change();

            $table->string('home_store_p1')->nullable()->change();
            $table->string('home_store_p2')->nullable()->change();

            $table->string('home_tatto_cont_p1')->nullable()->change();
            $table->string('home_tatto_cont_p2')->nullable()->change();
            $table->string('home_tatto_cont_card1_p')->nullable()->change();
            $table->string('home_tatto_cont_card2_p')->nullable()->change();
            $table->string('home_tatto_cont_card3_p')->nullable()->change();

            $table->string('home_testimonials_p')->nullable()->change();
            $table->string('home_testimonials_card_p')->nullable()->change();
        });
    }
};
