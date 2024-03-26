<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         User::factory()->create([
             'name' => 'Kethaka',
             'email' => 'kethakaranasinghe@gmail.com',
             'password' => bcrypt('Testpassword123'),
             'email_verified_at' => time()
         ]);

        Project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
    }
}
