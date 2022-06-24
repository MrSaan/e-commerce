<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Thumbnail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;

    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'name' => $this->faker->sentence(4),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'slug' => $this->faker->slug(),
            'size' => implode(',', $this->faker->randomElements(['S', 'M', 'L', 'XL', 'XXL'], 3)),
            'colors' => $this->faker->safeHexColor(),
            'details' => $this->faker->sentence(5),
            'price' => $this->faker->numerify('##'),
            'qty' => $this->faker->randomNumber(3, false),
            'description' => '<p>' . implode('<p></p>', $this->faker->paragraphs(1)) . '</p>',
        ];
    }
}
