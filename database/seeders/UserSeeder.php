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
        // Ensure roles exist
        $adminRole = Role::firstOrCreate(
            ['code' => 'admin'],
            ['name' => 'Administrator', 'description' => 'Super user with full access']
        );

        $operatorRole = Role::firstOrCreate(
            ['code' => 'operator'],
            ['name' => 'Operator', 'description' => 'Site operations staff']
        );

        // Create Admin User
        User::updateOrCreate(
            ['email' => 'admin@csi.co.id'],
            [
                'name' => 'Super Admin',
                'username' => 'admin',
                'password' => Hash::make('password'),
                'role_id' => $adminRole->id,
                'is_active' => true,
            ]
        );

        // Create Operator User
        User::updateOrCreate(
            ['email' => 'tech@csi.co.id'],
            [
                'name' => 'Site Operator',
                'username' => 'operator',
                'password' => Hash::make('password'),
                'role_id' => $operatorRole->id,
                'is_active' => true,
            ]
        );
    }
}
