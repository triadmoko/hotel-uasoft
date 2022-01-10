<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hotel_id' => 5,
            'title' => $this->faker->sentence(2),
            'price' => 500000,
            'image' => $this->faker->imageUrl(640, 480, 'Hotels', true),

            'hotel_id' => 2,
            'title' => $this->faker->sentence(2),
            'price' => 400000,
            'image' => $this->faker->imageUrl(640, 480, 'Hotels', true),

        ];
    }
}
