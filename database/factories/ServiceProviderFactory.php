<?php

namespace Database\Factories;

use App\Models\ServiceProvider;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceProvider>
 */
class ServiceProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = ServiceProvider::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), //creates a new user automatically
            'service_type' => $this->faker->randomElement(['cable_operator', 'newspaper_agent', 'technician', 'delivery_boy', 'electrician']),
            'business_name' => $this->faker->company(),
            'address' => $this->faker->address(),
        ];
    }
}
