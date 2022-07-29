<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

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
    public function definition()
    {
        $faker = Faker::create('id_ID');

        $contentArr = ['Kemeja', 'Kaos', 'Celana', 'Baju Muslim', 'Jaket', 'Hoodie'];

        $name = $faker->company . ' ' . Arr::random($contentArr);
        $slug = Str::slug($name);
        $image = $faker->imageUrl(800,600);
        $description = $faker->realText();
        $price = $faker->numberBetween(10000, 100000);

        return [
            'name' => $name,
            'slug' => $slug,
            'image' => $image,
            'description' => $description,
            'price' => $price // Rp. 10.000 - Rp 100.000
        ];
    }
}
