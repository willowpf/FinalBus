<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BusRout>
 */
class BusRoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
                'bus_id' => $this->faker->randomNumber(4), // Random 3-digit number for bus ID
            'bus_make' => $this->faker->randomElement(['Mercedes', 'Isuzu', 'Howo', 'Volvo']), // Random bus manufacturer from specified list
            'arrival_time' => $this->faker->time('H:i'), // Random arrival time (e.g., 14:30)
            'departure_time' => $this->faker->time('H:i'), // Random departure time
            'destination' => $this->faker->randomElement(['Terminal', 'UCLM']), // Random city name for destination
        ];
    }
}
