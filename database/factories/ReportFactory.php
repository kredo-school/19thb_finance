<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(20),
            'email'=>fake()->email(20),
            'subject'=>fake()->text(20),
            'details'=>fake()->realText(50),
            'user_id'=>\App\Models\User::factory(),
        ];
    }
}
