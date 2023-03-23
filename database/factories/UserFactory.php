<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naziv projekta' => fake()->naziv projekta(),
            'opis projekta' => fake()->opis pprojekta(),
            'status projekta' =>fake()->status projekta(),
            'nadlezna osoba' => fake()->nadlezna osoba(),
            'datum pocetka radova' =>fake->datuma pocetka radova(),
            'datum zavrsetka radova'=>fake->datum zavrsetka radova(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}