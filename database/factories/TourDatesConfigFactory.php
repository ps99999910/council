<?php

namespace Database\Factories;

use App\Models\TourDatesConfig;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TourDatesConfigFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TourDatesConfig::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'tour_status' => Str::random(10),
        ];
    }
}
