<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'door'
        ]);
        Category::create([
            'name' => 'car'
        ]);
        Category::create([
            'name' => 'book'
        ]);
        Category::create([
            'name' => 'pencil'
        ]);
        Category::create([
            'name' => 'desk'
        ]);
        Category::create([
            'name' => 'computer_laptop'
        ]);
    }
}
