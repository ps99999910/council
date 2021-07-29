<?php

namespace Database\Factories;

use App\Models\TourBooking;
use Illuminate\Database\Eloquent\Factories\Factory;

class TourBookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TourBooking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'year' => '2021',
            'email' => $this->faker->email(),
            'pos_code' => 'P',
            'mobile' => $this->faker->phoneNumber(),
            'student_name' => $this->faker->name(),
            'kindergarten' => $this->faker->name(),
            'school' => $this->faker->jobTitle(),
            'year_apply' => '2021-22',
            'tour_date' => '2021-09-01'



        ];
    }
}
