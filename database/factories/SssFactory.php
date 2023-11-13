<?php

namespace Database\Factories;

use App\Models\sss;
use Illuminate\Database\Eloquent\Factories\Factory;

class SssFactory extends Factory
{
    protected $model = sss::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sss_baslik' => $this->faker->name(),
            'sss_icerik' => $this->faker->name(),
        ];
    }
}
