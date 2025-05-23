<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Rohan Shrestha',
            'email' => 'shrestharohan@gmail.com',
            'address' => 'Kathmandu',
            'password' => Hash::make ('rohan123'),
        ]);

        Category::factory()->create([
            'title' => 'Skin Care',
            'slug' => 'skin-care',
            'rank' => 5,
        ]);
    }
}
