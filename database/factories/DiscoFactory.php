<?php

namespace Database\Factories;

use App\Models\Disco;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiscoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Disco::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'album' => $this->faker->unique()->word,
            'faixa' => $this->faker->unique()->word,
        ];
    }
}