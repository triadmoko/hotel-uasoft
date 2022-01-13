<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2),
            'address' => $this->faker->city(),
            'total_rooms' => $this->faker->buildingNumber(),
            'image' => $this->faker->imageUrl(640, 480, 'Hotels', true),
            'user_id' => 2
        ];
        return [
            'title' => $this->faker->sentence(2),
            'address' => $this->faker->city(),
            'total_rooms' => $this->faker->buildingNumber(),
            'image' => $this->faker->imageUrl(640, 480, 'Hotels', true),
            'user_id' => 4
        ];
    }
}
