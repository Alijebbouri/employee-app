<?php

namespace Database\Factories;
use App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Employee::class;
    public function definition(): array
    {
        return [
            'nom' => fake()->lastName,
            'prenom' => fake()->firstName,
            'email' => fake()->unique()->safeEmail,
            'hire_date' => fake()->date,
            'service' => fake()->jobTitle,
            'employee_type' => fake()->randomElement(['Full-time', 'Part-time', 'Contract']),
            'cin' => fake()->unique()->numerify('########'),
            'salaire' => fake()->numberBetween(3000, 10000),
        ];
    }
}
