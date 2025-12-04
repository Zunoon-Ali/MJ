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
            Schema::create('home_page_contents', function (Blueprint $table) {
                $table->id();

                // Banner Section
                $table->string('home_banner_leftCard_textpath')->nullable();
                $table->string('home_banner_leftCard_h1')->nullable();
                $table->string('home_banner_leftCard_p')->nullable();
                $table->string('home_banner_leftCard_a')->nullable();
                $table->string('home_banner_middleCard_img')->nullable();
                $table->string('home_banner_middleCard_span')->nullable();
                $table->string('home_banner_rightCard_img')->nullable();
                $table->string('home_banner_rightCard_textpath')->nullable();


                // About Section
                $table->string('home_about_p1')->nullable();
                $table->string('home_about_h2')->nullable();
                $table->string('home_about_p2')->nullable();
                $table->string('home_about_img')->nullable();
                $table->string('home_about_a')->nullable();


                // Product Section
                $table->string('home_product_p')->nullable();
                $table->string('home_product_h2')->nullable();


                // Store Section
                $table->string('home_store_p1')->nullable();
                $table->string('home_store_h2')->nullable();
                $table->string('home_store_p2')->nullable();
                $table->string('home_store_a')->nullable();
                $table->string('home_store_card1_img')->nullable();
                $table->string('home_store_card1_text')->nullable();
                $table->string('home_store_card2_img')->nullable();
                $table->string('home_store_card2_text')->nullable();


                // Tattoo Section
                $table->string('home_tatto_left_card2_img')->nullable();
                $table->string('home_tatto_right_card2_img')->nullable();
                $table->string('home_tatto_card2_text')->nullable();
                $table->string('home_tatto_cont_p1')->nullable();
                $table->string('home_tatto_cont_h2')->nullable();
                $table->string('home_tatto_cont_p2')->nullable();
                $table->string('home_tatto_cont_card1_h5')->nullable();
                $table->string('home_tatto_cont_card1_p')->nullable();
                $table->string('home_tatto_cont_card2_h5')->nullable();
                $table->string('home_tatto_cont_card2_p')->nullable();
                $table->string('home_tatto_cont_card3_h5')->nullable();
                $table->string('home_tatto_cont_card3_p')->nullable();
                $table->string('home_tatto_cont_a')->nullable();

                // Testimonials
                $table->string('home_testimonials_h2')->nullable();
                $table->string('home_testimonials_p')->nullable();
                $table->string('home_testimonials_card_h6')->nullable();
                $table->string('home_testimonials_card_p')->nullable();
                $table->string('home_testimonials_card_img')->nullable();

                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('home_page_contents');
        }
    };
