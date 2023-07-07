<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user = User::create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@test.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$o1UIccnqc1HclfEEdkvwCeNibVhJJIBB7f2rH57keCrrt0gvirVKS', 
        ]);


        $user->assignRole('SuperAdmin');
    }
}
