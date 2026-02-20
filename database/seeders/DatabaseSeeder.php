<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // <-- Ye missing tha
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Test User banane ke liye bhi firstOrCreate use karna behtar hai
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            ['name' => 'Test User', 'password' => Hash::make('password')]
        );

        // 2. Admin User
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'], // Pehle check karega ye email hai ya nahi
            [
                'name' => 'Admin',
                'password' => Hash::make('12345678'),
                'role' => '1',
            ]
        );
    }
}