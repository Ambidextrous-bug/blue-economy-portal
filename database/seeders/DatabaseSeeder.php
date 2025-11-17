<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin account
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'status' => 'active',
            ]
        );

        // Business account
        User::firstOrCreate(
            ['email' => 'business@example.com'],
            [
                'name' => 'Business User',
                'password' => Hash::make('password123'),
                'role' => 'business',
                'status' => 'active',
            ]
        );

        // Visitor account
        User::firstOrCreate(
            ['email' => 'visitor@example.com'],
            [
                'name' => 'Visitor User',
                'password' => Hash::make('password123'),
                'role' => 'visitor',
                'status' => 'active',
            ]
        );
    }
}