<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ServiceRequest;
use App\Models\User;
use App\Models\ServiceProvider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceRequest>
 */
class ServiceRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = ServiceRequest::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), //creates a new user automatically
            'provider_id' => ServiceProvider::factory(), //creates a new service provider automatically
            'service_type' => $this->faker->randomElement(['cable', 'newspaper', 'technician', 'delivery' , 'electricity']),
            'status' => $this->faker->randomElement(['pending', 'accepted', 'rejected', 'completed']),
        ];
    }
}
