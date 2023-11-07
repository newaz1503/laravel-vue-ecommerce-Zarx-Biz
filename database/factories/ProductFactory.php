<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name =  $this->faker->text(15);
        $price = $this->faker->numberBetween(100,900);
        return [
            'name' => $name,
            'slug' =>Str::slug($name),
            'description' => $this->faker->text(100),
            'original_price' => $price,
            'selling_price' => $price - 30,
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
