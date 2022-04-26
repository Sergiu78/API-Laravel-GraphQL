<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = Carbon::parse(now())->format('Y.m.d');
        return [
            'name' => $this->faker->words(3, true),
            'date' => $date
        ];
    }
}
