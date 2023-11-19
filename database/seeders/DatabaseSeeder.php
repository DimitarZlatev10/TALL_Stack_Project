<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use App\Models\Watch;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'John Doe',
        // ]);

        // Watch::factory(30)->create();
        Category::factory(1)->create([
            'name' => 'G Shock',
            'slug' => 'g-shock'
        ]);
        Category::factory(1)->create([
            'name' => 'Rolex',
            'slug' => 'rolex'
        ]);

        Watch::factory(15)->create([
            'category_id' => 1
        ]);
        Watch::factory(15)->create([
            'category_id' => 2
        ]);
    }
}
