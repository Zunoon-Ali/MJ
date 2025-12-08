<?php

namespace Database\Factories;

use App\Models\TestimonialCard;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TestimonialCard>
 */
class TestimonialCardFactory extends Factory
{
    protected $model = TestimonialCard::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $testimonials = [
            "After struggling with runner's knee, I decided to give Leaf Healz pain salve a try, and it worked wonders. Shortly after using it, the pain vanished. I'm really impressed with Leaf Healz's pain salve.",
            "I've been dealing with a stressful job lately, and I was searching for a natural way to relax without resorting to medication. I decided to try Leaf Healz tincture, and it really did the trick. It helped me unwind and feel much calmer.",
            "As someone who suffers from chronic pain, I'm always looking for natural remedies. Leaf Healz CBD cream has been a game-changer for me. The relief is almost instant and lasts for hours!",
            "I was skeptical at first, but this product exceeded my expectations. My sleep quality has improved dramatically since I started using the CBD oil. Highly recommend!",
            "The customer service was exceptional, and the product quality is top-notch. I've tried several CBD brands, but Leaf Healz stands out from the rest.",
            "I use this for my anxiety and it's been incredibly helpful. No more jitters from traditional medications. Just calm, natural relief.",
            "My arthritis pain has been significantly reduced since using this product. I can finally enjoy my daily walks again!",
            "Great product! Fast shipping and excellent packaging. The CBD balm works wonders on sore muscles after my workouts.",
        ];

        $names = [
            'Kathy H.',
            'Anne J.',
            'Harold S.',
            'Jennifer M.',
            'Michael R.',
            'Sarah K.',
            'David L.',
            'Emily P.',
            'James W.',
            'Lisa B.',
            'Robert T.',
            'Maria G.',
            'Thomas C.',
            'Patricia D.',
            'Daniel F.'
        ];

        return [
            'name' => fake()->randomElement($names),
            'testimonial' => fake()->randomElement($testimonials),
            'image' => null, // We'll use fallback images in the view
            'order' => fake()->numberBetween(0, 100),
        ];
    }
}
