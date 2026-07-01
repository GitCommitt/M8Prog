<?php

namespace Database\Factories;

use App\Models\tshirt;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<tshirt>
 */
class TshirtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'text-line-1',
            'text-line-2',
        ];
    }
}
