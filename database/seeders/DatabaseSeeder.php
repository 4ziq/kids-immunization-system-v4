<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'identification_number' => 'USR001',
            'role' => User::ROLE_USER,
        ]);

        // Call the AdminStaffSeeder
        $this->call([
            AdminStaffSeeder::class,
        ]);
    }
}
