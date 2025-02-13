<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceProvider;
use App\Models\ServiceRequest;
use App\Models\Tag;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // Create 10 users
         User::factory()->count(10)->create();

         // Create 10 service providers
         ServiceProvider::factory()->count(10)->create();

         // Create 20 service requests
         ServiceRequest::factory()->count(20)->create();

         // Create 15 tags
         Tag::factory()->count(15)->create();
    }
}
