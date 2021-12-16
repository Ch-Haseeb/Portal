<?php

namespace Database\Factories;

use App\Models\Internship;
use Illuminate\Database\Eloquent\Factories\Factory;

class InternshipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Internship::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_name' => $this->faker->randomElement(array('Web Development','Web Designing','Andriod Development','SEO','Graphic Designing','Amzon VA','Afflaite Marketing','Freelancing')),
            'duration' => $this->faker->randomElement(array('2 Month','3 Month','4 Month','5 Month')),
            'status'=>$this->faker->randomElement(array('Free','Paid')),
            'enroll_student'=>$this->faker->numberBetween(20,200),
        ];
    }
}
