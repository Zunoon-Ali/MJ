<?php

namespace Database\Seeders;

use App\Models\TestimonialCard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing testimonial cards
        TestimonialCard::truncate();

        // Create 6 testimonial cards with fake data
        TestimonialCard::factory()->count(6)->create();

        $this->command->info('Created 6 testimonial cards successfully!');
    }
}
