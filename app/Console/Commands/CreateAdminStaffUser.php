<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateAdminStaffUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {role} {name} {email} {identification_number} {--password=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new admin or staff user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $role = $this->argument('role');
        $name = $this->argument('name');
        $email = $this->argument('email');
        $identificationNumber = $this->argument('identification_number');
        $password = $this->option('password') ?? Str::random(10);

        // Validate role
        if (!in_array($role, [User::ROLE_ADMIN, User::ROLE_STAFF])) {
            $this->error('Invalid role. Must be either "admin" or "staff".');
            return 1;
        }

        // Check if user already exists
        if (User::where('email', $email)->exists()) {
            $this->error('User with this email already exists.');
            return 1;
        }

        if (User::where('identification_number', $identificationNumber)->exists()) {
            $this->error('User with this identification number already exists.');
            return 1;
        }

        // Create user
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'identification_number' => $identificationNumber,
            'role' => $role,
        ]);

        $this->info("{$role} user created successfully!");
        $this->info("Email: {$email}");
        $this->info("Password: {$password}");

        return 0;
    }
} 