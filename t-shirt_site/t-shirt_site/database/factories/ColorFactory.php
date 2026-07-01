<?php

namespace Database\Factories;

use App\Models\color;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<color>
 */
class ColorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'
        ];
    }
}
