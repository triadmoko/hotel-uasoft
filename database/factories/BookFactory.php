<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 10,
            'hotel_id' => 1,
            'room_id' => 2,
            'rooms_id' => 2,
            'date' => $this->faker->date(),
            'night' => 2,
            'room' => 1,
            'visitor' => 2,
            'total' => 1000000,
            
        ];
    }
}
