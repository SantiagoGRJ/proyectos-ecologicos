<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

            RoleSeeder::class,
            UserSeeder::class
        ]);
        // User::factory(10)->create();
        User::factory()->count(7)->withRandomRole()->create();
        Project::factory(10)->create();


    }
}
