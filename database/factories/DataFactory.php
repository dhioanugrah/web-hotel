<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_kamar'=>$this->faker->word(),
            'jum_kamar'=>rand(5,10),
            'fasilitas_kamar'=>$this->faker->word(),
            'fasilitas_umum'=>$this->faker->word(),
        ];
    }
}
