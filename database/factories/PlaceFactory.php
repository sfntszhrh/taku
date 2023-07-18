<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    protected $model = Place::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arr = array('1', '2', '3');

        return [
            'name' => $this->faker->city(),
            'description' => $this->faker->sentence(),
            'category_id' => Category::all()->random()->id,
            'viewers' => $this->faker->randomNumber(2),
        ];
    }
}
