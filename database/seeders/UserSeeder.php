<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a admin user and Attach the admin role to it
        User::insert([
            'name'     => 'Rami Elmoubtahige',
            'email'    => 'ramielmoubtahige@gmail.com',
            'password' => Hash::make('password'),
            'role_id'  => Role::ADMIN_ID,
        ]);
    }
}
