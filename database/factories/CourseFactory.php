<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'course_key' => $this->faker->unique()->bothify('ROB###'),
            'title' => $this->faker->sentence(3),
            'cover' => $this->faker->imageUrl(),
            'content' => $this->faker->paragraph(),
            'didactic_material' => $this->faker->sentence(),
            'robotics_kit_id' => $this->faker->numberBetween(1,3)
        ];
    }
}