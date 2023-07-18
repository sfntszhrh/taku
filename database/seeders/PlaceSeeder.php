<?php

namespace Database\Seeders;
use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $arr = [1, 2, 3];
        // Place::create([
        //     'category_id'=> array_rand($arr, 3),
        //     'name'=> 'Asta Tinggi',
        //     'description'=>'keraton sumenep merupakan',
        //     'image'=> 'image',
        //     'lat'=> '100',
        //     'long'=> '100',

        // ]);

        Place::factory()->count(20)->create();
    }
}
 
