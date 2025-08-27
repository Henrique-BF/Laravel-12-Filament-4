<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test 1',
            'email' => 'test@test.com',
            'role' => 'admin',
            'password' => Hash::make('15121998'),
        ]);

        User::factory()->create([
            'name' => 'Test 2',
            'email' => 'test_2@test.com',
            'role' => 'almox',
            'password' => Hash::make('15121998'),
        ]);

        User::factory()->create([
            'name' => 'Test 3',
            'email' => 'test_3@test.com',
            'role' => 'vendas',
            'password' => Hash::make('15121998'),
        ]);
    }
}
