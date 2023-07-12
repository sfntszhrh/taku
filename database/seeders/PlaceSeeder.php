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
        Place::create([
            'category_id'=> '2',
            'name'=> 'Asta Tinggi',
            'description'=>'keraton sumenep merupakan',
            'image'=> 'image',
            'lat'=> '100',
            'long'=> '100',

        ]);
    }
}
 