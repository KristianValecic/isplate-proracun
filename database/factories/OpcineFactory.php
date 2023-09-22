<?php
namespace Database\Factories;

use App\Models\Opcine;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpcineFactory extends Factory
{
    protected $model = Opcine::class;

    public function definition()
    {
        return [
            'rkpid' => $this->faker->unique()->numberBetween(10000, 99999),
            'naziv' => 'Općina ' . $this->faker->city,
            'adresa' => $this->faker->streetAddress,
            'mjesto' => $this->faker->postcode . ' ' . $this->faker->city,
            'zupanija' => $this->faker->state,
            'homepage' => $this->faker->url,
            'oib' => $this->faker->unique()->numerify('###########'),
            'url' => $this->faker->slug,
            'grb' => 'img/grb-' . $this->faker->slug . '.jpg',
            'favico' => 'img/ico-' . $this->faker->slug . '.jpg',
            'background' => 'img/pozadina-' . $this->faker->slug . '.jpg',
            'description' => $this->faker->text(200)
        ];
    }
}
