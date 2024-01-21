<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Producer;
use App\Models\Stock;
use App\Models\Supplier;
use App\Models\Trademark;
use App\Models\Type;
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
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'thumbnail' => $this->faker->image,
            'price' => $this->faker->randomNumber(),
            'discount' => $this->faker->randomNumber(),
            'category_id' => Category::factory(),
            'types_id' => Type::factory(),
            'stock_id' => Stock::factory(),
            'gallery_id' => Gallery::factory(),
            'supplier_id' => Supplier::factory(),
            'producer_id' => Producer::factory(),
            'trademark_id' => Trademark::factory(),
        ];
    }
}
