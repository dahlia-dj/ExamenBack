<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\support\str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Motivation>
 */
class MotivationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "intitule" => Str::upper(Str::random(10)) 
        ];
    }
}
