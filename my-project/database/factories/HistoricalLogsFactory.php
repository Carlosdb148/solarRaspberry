<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\HistoricalLogs;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HistoricalLogs>
 */
class HistoricalLogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ejex' => $this->faker->randomFloat(2, 10, 150),
            'ejey' => $this->faker->randomFloat(2, 10, 150),
            'bateria' => $this->faker->randomFloat(2, 10, 150),
            'ldr1' => $this->faker->randomFloat(2, 10, 150),
            'ldr2' => $this->faker->randomFloat(2, 10, 150),
            'ldr3' => $this->faker->randomFloat(2, 10, 150),
            'ldr4' => $this->faker->randomFloat(2, 10, 150) , 
            'created_at' => now(), // password            
        ];
    }
   
}
