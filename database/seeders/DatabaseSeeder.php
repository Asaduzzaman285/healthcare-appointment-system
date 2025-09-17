<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles
        Role::create(['name' => 'patient']);
        Role::create(['name' => 'doctor']);
        Role::create(['name' => 'admin']);

        // Create permissions
        Permission::create(['name' => 'book-appointment']);
        Permission::create(['name' => 'view-appointments']);
        Permission::create(['name' => 'manage-users']);

        // Assign permissions to roles
        $adminRole = Role::findByName('admin');
        $adminRole->givePermissionTo(['manage-users', 'view-appointments']);
        $patientRole = Role::findByName('patient');
        $patientRole->givePermissionTo('book-appointment');
        $doctorRole = Role::findByName('doctor');
        $doctorRole->givePermissionTo('view-appointments');

        // Create sample users
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@healthcare.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        $doctor = User::create([
            'name' => 'Dr. John Doe',
            'email' => 'doctor@healthcare.com',
            'password' => bcrypt('password'),
        ]);
        $doctor->assignRole('doctor');

        $patient = User::create([
            'name' => 'Jane Doe',
            'email' => 'patient@healthcare.com',
            'password' => bcrypt('password'),
        ]);
        $patient->assignRole('patient');
    }
}