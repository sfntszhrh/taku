<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'wisata alam'
        ]);

        Category::create([
            'name' => 'wisata kuliner'
        ]);

        Category::create([
            'name' => 'wisata Religi'
        ]);
    }
}
