<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    protected $model = Book::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'image' => fake()->image('public/storage/images',640,480, null, false),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 10, 5000),
            'stock' => fake()->randomDigitNotNull(),
            'version' => fake()->randomElement(['digital', 'physical']),
            'launch_date' => fake()->date(),
            'address' => fake()->state()
        ];
    }
}
