<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Room;
use App\Models\User;
use App\Models\Hotel;
use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::Factory(5)->create();

        Hotel::factory(5)->create();
        Room::factory(3)->create();
        User::factory(3)->create();
        Hotel::factory(3)->create();
        Book::factory(3)->create();
    }
}
