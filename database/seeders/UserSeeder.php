<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()->create([
            'name' => 'Test Administrador',
            'email' => 'test@administrador.com',
            'password' => Hash::make('password'),
        ])->assignRole('admin');

        User::factory()->create([
            'name' => 'Test Pushing',
            'email' => 'test@pushing.com',
            'password' => Hash::make('password'),
        ])->assignRole('pushing');

        User::factory()->create([
            'name' => 'Test Investor',
            'email' => 'test@investor.com',
            'password' => Hash::make('password'),
        ])->assignRole('investor');
    }
}
