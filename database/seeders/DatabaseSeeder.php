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
        User::factory()->count(14)->withRandomRole()->create();
        $this->call([

            RoleSeeder::class,
            UserSeeder::class,
            ProjectSeeder::class,
        ]);
        // User::factory(10)->create();



    }
}
