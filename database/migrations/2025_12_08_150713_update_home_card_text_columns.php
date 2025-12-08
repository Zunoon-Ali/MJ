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
            // Change card text fields that may contain HTML or long text
            $table->text('home_store_card1_text')->nullable()->change();
            $table->text('home_store_card2_text')->nullable()->change();
            $table->text('home_tatto_card2_text')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_page_contents', function (Blueprint $table) {
            $table->string('home_store_card1_text')->nullable()->change();
            $table->string('home_store_card2_text')->nullable()->change();
            $table->string('home_tatto_card2_text')->nullable()->change();
        });
    }
};
