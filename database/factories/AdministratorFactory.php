<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class administratorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->unique()->userName(),
            'password' => bcrypt('password123'), // Ganti dengan bcrypt atau Hash::make() sesuai kebutuhan
            'level' => $this->faker->randomElement(['admin', 'petugas']),
            'remember_token' => Str::random(10),
        ];
    }
}
