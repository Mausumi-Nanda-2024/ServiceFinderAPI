<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tag;
use App\Models\User;
use App\Models\ServiceProvider;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Tag::class;
    public function definition(): array
    {
        return [
            'user_id'=> User::factory(), //creates a new user automatically
            'provider_id' => ServiceProvider::factory(), //creates a new service provider automatically
        ];
    }
}
