<?php

namespace Database\Factories;

use App\Models\Isplate; // Assuming you have an Isplate model, if not create it.
use Illuminate\Database\Eloquent\Factories\Factory;

class IsplateFactory extends Factory
{
    protected $model = Isplate::class;

    public function definition()
    {
        return [
            'naziv' => $this->faker->company,
            'adresa' => $this->faker->address,
            'mjesto' => $this->faker->city,
            'zupanija' => $this->faker->state,
            'homepage' => $this->faker->url,
            'oib' => $this->faker->randomNumber(8, true), // Generating an 8-digit random number
            'url' => $this->faker->slug,
            'grb' => 'img/grb-' . $this->faker->slug . '.jpg',
            'favico' => 'img/ico-' . $this->faker->slug . '.jpg',
            'background' => 'img/pozadina-' . $this->faker->slug . '.jpg',
            'description' => $this->faker->paragraph,
        ];
    }
}
