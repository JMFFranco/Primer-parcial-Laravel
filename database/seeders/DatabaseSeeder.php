<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Computer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory()->count(10)->create();
        Computer::factory()->count(5)->create();
    }
}
