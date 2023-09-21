<?php

namespace Database\Factories;

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
            'name' => $this->faker->name,
            'tag_id' => 1,
            'category_id' => 1,
            'description' => $this->faker->text,
            'short_description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 0, 99.99),
            'sale_price' => $this->faker->randomFloat(2, 0, 99.99),
            'is_active' => $this->faker->boolean,
            'is_featured' => $this->faker->boolean,
            'is_bestseller' => $this->faker->boolean,
            'is_new' => $this->faker->boolean,
            'is_top' => $this->faker->boolean,
            'is_sale' => $this->faker->boolean,
            'is_hot' => $this->faker->boolean,
            'is_available' => $this->faker->boolean,
            'is_in_stock' => $this->faker->boolean,
            'is_out_of_stock' => $this->faker->boolean,
            'is_upcoming' => $this->faker->boolean,
            'is_exclusive' => $this->faker->boolean,
            'is_trending' => $this->faker->boolean,
            'is_discount' => $this->faker->boolean,
            'is_taxable' => $this->faker->boolean,
            'is_promoted' => $this->faker->boolean,
            'is_verified' => $this->faker->boolean,
            'is_approved' => $this->faker->boolean,
            'is_draft' => $this->faker->boolean,
            'is_published' => $this->faker->boolean,
            'is_private' => $this->faker->boolean,
            'is_recommended' => $this->faker->boolean,
            'is_popular' => $this->faker->boolean,
            'sku' => $this->faker->unique()->word,
            'barcode' => $this->faker->unique()->word,
            'mpn' => $this->faker->unique()->word,
            'gtin' => $this->faker->unique()->word,
            'model' => $this->faker->unique()->word,
            'image' => $this->faker->word,
            'images' => $this->faker->word,
            'thumbnail' => $this->faker->word,
            'gallery' => $this->faker->word,
            'video' => $this->faker->word,
            'pdf' => $this->faker->word,
            'slug' => $this->faker->unique()->slug,
            'meta_title' => $this->faker->word,
            'meta_description' => $this->faker->text,
            'meta_keywords' => $this->faker->word,

        ];
    }
}
