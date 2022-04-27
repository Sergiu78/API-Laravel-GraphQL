<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $event = \App\Models\Event::factory()->create();
        $user = \App\Models\User::factory()->create();
        return [
            'event_id' => $event->id,
            'user_id' => $user->id,
        ];
    }
}
