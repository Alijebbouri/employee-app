<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'email' => $this->faker->unique()->safeEmail,
            'hire_date' => $this->faker->date,
            'service' => $this->faker->jobTitle,
            'employee_type' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract']),
            'cin' => $this->faker->unique()->numerify('########'),
            'salaire' => $this->faker->numberBetween(3000, 10000),
        ];
    }
}
